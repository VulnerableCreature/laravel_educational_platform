<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'surname' => 'required',
            'name' => 'required',
            'middleName' => 'required',
            'login' => 'required|unique:users,login',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Поле логин обязательно',
            'password.required' => 'Поле пароль обязательно',
            'surname.required' => 'Поле фамилия обязательно',
            'name.required' => 'Поле имя обязательно',
            'middleName.required' => 'Поле отчетсво обязательно',
            'email.required' => 'Поле пароль обязательно',
            'email.unique' => 'Пользователь с таким email уже существует',
            'login.unique' => 'Пользователь с таким логином уже существует',
        ];
    }
}
