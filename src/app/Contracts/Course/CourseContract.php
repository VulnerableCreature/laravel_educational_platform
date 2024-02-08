<?php

namespace App\Contracts\Course;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

interface CourseContract
{
    public function allCourse(): Collection;
    public function delete(Course $course): void;
    public function update(Course $course, array $data): void;
}
