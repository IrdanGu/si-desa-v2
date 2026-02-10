<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'no_kk' => ['required', 'min:16', 'max:20'],
            'nama_lengkap' => ['required', 'min:3', 'max:30'],
            'jenis_kelamin' => ['required'],
            'hubungan' => ['required', 'min:3', 'max:15'],
            'tempat_lahir' => ['required', 'min:6', 'max:15'],
            'tanggal_lahir' => ['required'],
            'status' => ['required', 'min:5', 'max:15'],
            'pendidikan' => ['required', 'min:2', 'max:30'],
            'pekerjaan' => ['required', 'min:3', 'max:15'],
            'dusun' => ['required', 'min:5', 'max:15'],
            'rt' => ['required', 'min:2', 'max:8'],
            'rw' => ['required', 'min:2', 'max:8'],
            'desa' => ['required', 'min:2', 'max:8'],

        ];

        if (request()->isMethod('POST')) {
            $rules['nik'] = ['required', 'min:16', 'max:20', 'unique:penduduk,nik'];
        }

        return $rules;
    }
}
