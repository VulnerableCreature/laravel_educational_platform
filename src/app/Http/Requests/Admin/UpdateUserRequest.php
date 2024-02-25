<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'role_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'surname.required' => 'Поле фамилия обязательно',
            'name.required' => 'Поле имя обязательно',
            'middleName.required' => 'Поле отчество обязательно',
        ];
    }
}
