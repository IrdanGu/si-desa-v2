<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $userId = $this->route('id');

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($userId)],
            'level' => ['required', 'in:admin,karangtaruna,user'],
        ];

        if ($this->isMethod('post')) {
            $rules['password'] = ['required', 'string', 'min:5', 'max:20'];
        } else {
            $rules['password'] = ['nullable', 'string', 'min:5', 'max:20'];
        }

        return $rules;
    }
}
