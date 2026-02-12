<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCatalogController extends Controller
{
    public function index(Request $request)
    {
        $selectedCategory = $request->get('kategori');
        $search = $request->get('q');

        $products = Product::published()
            ->with(['primaryImage', 'categories'])
            ->when($search, function ($query, $searchKeyword) {
                $query->where('nama', 'like', "%{$searchKeyword}%");
            })
            ->when($selectedCategory, function ($query, $categorySlug) {
                $query->whereHas('categories', function ($subQuery) use ($categorySlug) {
                    $subQuery->where('slug', $categorySlug);
                });
            })
            ->orderByDesc('is_featured')
            ->orderByDesc('created_at')
            ->paginate(12)
            ->withQueryString();

        $categories = ProductCategory::where('is_active', true)->orderBy('nama')->get();

        return view('frontend.products.index', [
            'title' => 'Katalog Produk',
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
            'search' => $search,
        ]);
    }

    public function show($slug)
    {
        $product = Product::published()
            ->with(['images', 'categories'])
            ->where('slug', $slug)
            ->firstOrFail();

        $categoryIds = $product->categories->pluck('id')->toArray();
        $relatedProducts = Product::published()
            ->with('primaryImage')
            ->where('id', '!=', $product->id)
            ->when(! empty($categoryIds), function ($query) use ($categoryIds) {
                $query->whereHas('categories', function ($subQuery) use ($categoryIds) {
                    $subQuery->whereIn('product_categories.id', $categoryIds);
                });
            })
            ->orderByDesc('is_featured')
            ->orderByDesc('created_at')
            ->limit(4)
            ->get();

        return view('frontend.products.show', [
            'title' => $product->nama,
            'product' => $product,
            'whatsappUrl' => $product->whatsappUrl(),
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
