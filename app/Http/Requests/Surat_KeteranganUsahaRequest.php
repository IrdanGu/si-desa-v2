<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Surat_KeteranganUsahaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {

        $rules = [
            'nik' => ['required', 'min:20'],
        ];

        if (request()->isMethod('POST')) {
            $rules['fotoktp'] = ['required', 'mimes:jpeg,png'];
            $rules['fotokk'] = ['required', 'mimes:jpeg,png'];
        }

        return $rules;
    }
}
