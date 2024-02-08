<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Validate;
use TallStackUi\Traits\Interactions;

class CreateCourse extends Component
{
    use Interactions;

    #[Validate('required|string')]
    public string $title;

    #[Validate('required|string')]
    public string $description;

    public function messages(): array
    {
        return [
            'title.required' => 'Поле заголовок является обязательным',
            'description.required' => 'Поле описание является обязательным',
        ];
    }

    public function create(): void
    {
        $data = $this->validate();

        Course::query()->create($data);

        $this->toast()->success('Вы успешно создали курс')->send();
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.courses.create-course');
    }
}
