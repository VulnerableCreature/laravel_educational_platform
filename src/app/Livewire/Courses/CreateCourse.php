<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
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

        /** @var User $user */
        $user = auth()->user()?->id;

        /** @var Course $course */
        $course = Course::query()->create($data);

        $course->course_teacher()->sync([$user]);

        $this->toast()->success('Вы успешно создали курс')->send();
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.courses.create-course');
    }
}
