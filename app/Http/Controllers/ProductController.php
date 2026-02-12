<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::with(['primaryImage', 'categories'])
            ->when($request->get('keyword'), function ($query, $keyword) {
                $query->where('nama', 'like', "%{$keyword}%");
            })
            ->orderByDesc('created_at')
            ->paginate(10)
            ->withQueryString();

        return view('products.index', array_merge(
            $this->notificationData(),
            ['products' => $products]
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::where('is_active', true)->orderBy('nama')->get();

        return view('products.create', array_merge(
            $this->notificationData(),
            ['categories' => $categories]
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();

        $product = Product::create([
            'nama' => $data['nama'],
            'slug' => $this->generateUniqueSlug($data['slug'] ?? $data['nama']),
            'deskripsi' => $data['deskripsi'] ?? null,
            'harga' => $data['harga'] ?? null,
            'stok' => $data['stok'],
            'status' => $data['status'],
            'is_featured' => $request->boolean('is_featured'),
            'wa_phone_override' => $data['wa_phone_override'] ?? null,
        ]);

        $product->categories()->sync($data['category_ids'] ?? []);
        $this->storeUploadedImages($request, $product);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with(['images', 'categories'])->findOrFail($id);
        $categories = ProductCategory::where('is_active', true)->orderBy('nama')->get();

        return view('products.edit', array_merge(
            $this->notificationData(),
            [
                'product' => $product,
                'categories' => $categories,
            ]
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::with('images')->findOrFail($id);
        $data = $request->validated();

        $product->update([
            'nama' => $data['nama'],
            'slug' => $this->generateUniqueSlug($data['slug'] ?? $data['nama'], $product->id),
            'deskripsi' => $data['deskripsi'] ?? null,
            'harga' => $data['harga'] ?? null,
            'stok' => $data['stok'],
            'status' => $data['status'],
            'is_featured' => $request->boolean('is_featured'),
            'wa_phone_override' => $data['wa_phone_override'] ?? null,
        ]);

        $product->categories()->sync($data['category_ids'] ?? []);
        $this->deleteImages($product, $data['delete_image_ids'] ?? []);
        $this->storeUploadedImages($request, $product);
        $this->setPrimaryImage($product, $data['primary_image_id'] ?? null);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::with('images')->findOrFail($id);
        foreach ($product->images as $image) {
            if (Storage::disk('public')->exists($image->path)) {
                Storage::disk('public')->delete($image->path);
            }
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }

    private function storeUploadedImages(Request $request, Product $product): void
    {
        if (! $request->hasFile('images')) {
            return;
        }

        $hasPrimary = $product->images()->where('is_primary', true)->exists();
        $nextOrder = (int) $product->images()->max('sort_order') + 1;

        foreach ($request->file('images') as $index => $image) {
            $path = $image->store('gambar/products', 'public');
            $product->images()->create([
                'path' => $path,
                'is_primary' => ! $hasPrimary && $index === 0,
                'sort_order' => $nextOrder + $index,
            ]);
        }
    }

    private function deleteImages(Product $product, array $deleteImageIds): void
    {
        if (empty($deleteImageIds)) {
            return;
        }

        $images = $product->images()->whereIn('id', $deleteImageIds)->get();
        foreach ($images as $image) {
            if (Storage::disk('public')->exists($image->path)) {
                Storage::disk('public')->delete($image->path);
            }
            $image->delete();
        }
    }

    private function setPrimaryImage(Product $product, ?int $primaryImageId): void
    {
        if ($primaryImageId && $product->images()->where('id', $primaryImageId)->exists()) {
            $product->images()->update(['is_primary' => false]);
            $product->images()->where('id', $primaryImageId)->update(['is_primary' => true]);

            return;
        }

        if (! $product->images()->where('is_primary', true)->exists()) {
            $firstImage = $product->images()->orderBy('sort_order')->first();
            if ($firstImage) {
                $firstImage->update(['is_primary' => true]);
            }
        }
    }

    private function generateUniqueSlug(string $rawSlug, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($rawSlug) ?: 'produk';
        $slug = $baseSlug;
        $counter = 1;

        while (Product::where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $slug;
    }

    private function notificationData(): array
    {
        $suratKtm = Surat::where('is_read', false)->count();
        $suratKu = Surat_KeteranganUsaha::where('is_read', false)->count();
        $suratDomisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notificationsSktm = Surat::where('is_read', false)->get();
        $notificationsKu = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notificationsDomisili = Surat_KeteranganDomisili::where('is_read', false)->get();

        return [
            'surat_ktm' => $suratKtm,
            'surat_ku' => $suratKu,
            'surat_domisili' => $suratDomisili,
            'notifications' => $notificationsSktm->merge($notificationsKu)->merge($notificationsDomisili),
        ];
    }
}
