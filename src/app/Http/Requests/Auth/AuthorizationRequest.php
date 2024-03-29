<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'login' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Поле логин обязательно',
            'password.required' => 'Поле пароль обязательно',
        ];
    }
}
