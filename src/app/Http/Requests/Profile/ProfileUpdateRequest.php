<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $user_id
 */

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'surname' => 'required',
            'name' => 'required',
            'middleName' => 'required',
            'email' => 'required|unique:users,email,' . $this->user_id
        ];
    }

    public function messages(): array
    {
        return [
            'surname.required' => 'Поле фамилия обязательно',
            'name.required' => 'Поле имя обязательно',
            'middleName.required' => 'Поле отчество обязательно',
            'email.unique' => 'Пользователь с таким же e-mail существует',
            'email.required' => 'Поле e-mail обязательно',
        ];
    }
}
