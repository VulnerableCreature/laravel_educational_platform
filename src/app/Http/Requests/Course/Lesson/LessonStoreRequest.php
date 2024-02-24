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
            'files' => 'nullable|file|mimes:pdf,docx'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле заголовок обязательно',
            'description.required' => 'Поле краткое содержание обязательно',
            'isVisible.required' => 'Поле видимость обязательно',
            'files.mimes' => 'Допустимый формат файла: pdf, docx',
        ];
    }
}
