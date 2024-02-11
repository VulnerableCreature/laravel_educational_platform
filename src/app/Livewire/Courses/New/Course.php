<?php

namespace App\Livewire\Courses\New;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\Course as CourseModel;

class Course extends Component
{
    public function render(): View
    {
        $courses = $this->courses();
        return view('livewire.courses.new.course', compact('courses'));
    }

    private function courses(): Collection
    {
        return CourseModel::all()->sortByDesc('created_at')->take(4);
    }
}
