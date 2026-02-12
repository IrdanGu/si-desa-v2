<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $productId = $this->route('id');

        return [
            'nama' => ['required', 'string', 'max:150'],
            'slug' => [
                'nullable',
                'string',
                'max:180',
                Rule::unique('products', 'slug')->ignore($productId),
            ],
            'deskripsi' => ['nullable', 'string'],
            'harga' => ['nullable', 'numeric', 'min:0'],
            'stok' => ['required', 'integer', 'min:0'],
            'status' => ['required', Rule::in([
                Product::STATUS_DRAFT,
                Product::STATUS_PUBLISHED,
                Product::STATUS_ARCHIVED,
            ])],
            'is_featured' => ['nullable', 'boolean'],
            'wa_phone_override' => ['nullable', 'string', 'max:20'],
            'category_ids' => ['nullable', 'array'],
            'category_ids.*' => ['integer', 'exists:product_categories,id'],
            'images' => ['nullable', 'array'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'delete_image_ids' => ['nullable', 'array'],
            'delete_image_ids.*' => ['integer', 'exists:product_images,id'],
            'primary_image_id' => ['nullable', 'integer', 'exists:product_images,id'],
        ];
    }
}
