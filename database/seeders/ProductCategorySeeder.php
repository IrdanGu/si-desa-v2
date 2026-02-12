<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Makanan',
            'Minuman',
            'Kerajinan',
            'Pertanian',
            'Jasa',
        ];

        foreach ($categories as $categoryName) {
            ProductCategory::updateOrCreate(
                ['slug' => Str::slug($categoryName)],
                [
                    'nama' => $categoryName,
                    'is_active' => true,
                ]
            );
        }
    }
}
