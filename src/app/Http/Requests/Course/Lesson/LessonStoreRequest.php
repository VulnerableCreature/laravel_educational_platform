<?php

namespace App\Http\Requests\Course\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class LessonStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'isVisible' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле заголовок обязательно',
            'description.required' => 'Поле краткое содержание обязательно',
            'isVisible.required' => 'Поле видимость обязательно',
        ];
    }
}
