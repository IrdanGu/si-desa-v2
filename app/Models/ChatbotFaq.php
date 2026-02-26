<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatbotFaq extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'question',
        'answer',
        'keywords',
        'is_active',
    ];

    protected $casts = [
        'keywords' => 'array',
        'is_active' => 'boolean',
    ];

    // Scope untuk FAQ aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope berdasarkan kategori
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
