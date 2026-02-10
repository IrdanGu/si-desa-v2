<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PotensiDesaRequest extends FormRequest
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
    public function rules()
    {
        $rules = [
            'judul' => ['required', 'min:5'],
            'content' => ['required', 'min:5'],
        ];

        if (request()->isMethod('POST')) {
            $rules['gambar'] = ['required', 'mimes:jpeg,png'];
        }

        return $rules;
    }
}
