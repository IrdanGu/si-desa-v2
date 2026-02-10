<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaKarangtarunaRequest extends FormRequest
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
            'tanggal_lahir' => ['required'],
            'jam' => ['required', 'min:5'],
            'acara' => ['required', 'min:5'],
            'tempat' => ['required', 'min:5'],

        ];

        return $rules;
    }
}
