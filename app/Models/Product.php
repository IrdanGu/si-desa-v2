<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public const STATUS_DRAFT = 'draft';

    public const STATUS_PUBLISHED = 'published';

    public const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'harga',
        'stok',
        'status',
        'is_featured',
        'wa_phone_override',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'harga' => 'decimal:2',
    ];

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_product');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED);
    }

    public function whatsappMessage(): string
    {
        $message = "Halo, Saya tertarik dengan {$this->nama}. Mohon info harga dan ketersediaan.";
        $productUrl = route('produk.show', $this->slug);

        return "{$message} Link produk: {$productUrl}";
    }

    public function whatsappUrl(): string
    {
        $phone = $this->wa_phone_override ?: config('services.whatsapp.number', '6287735495286');
        $phone = preg_replace('/\D+/', '', (string) $phone);
        if (str_starts_with($phone, '0')) {
            $phone = '62'.substr($phone, 1);
        }

        return 'https://wa.me/'.$phone.'?text='.rawurlencode($this->whatsappMessage());
    }
}
