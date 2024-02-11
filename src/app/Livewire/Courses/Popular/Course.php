<?php

namespace App\Livewire\Courses\Popular;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Component;
use \App\Models\Course as CourseModel;

class Course extends Component
{
    public function render(): View
    {
        $courses = $this->courses();
        return view('livewire.courses.popular.course', compact('courses'));
    }

    private function courses(): Collection|array
    {
        return CourseModel::query()
            ->withCount('users')
            ->orderBy('users_count', 'desc')
            ->take(5)
            ->get();
    }
}
