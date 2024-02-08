<?php

namespace App\Service\Course;

use App\Contracts\Course\CourseContract;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class CourseService implements CourseContract
{
	public function allCourse(): Collection
	{
		return Course::all()->sortByDesc('created_at');
	}

    public function delete(Course $course): void
    {
        $course->delete();
    }

    public function update(Course $course, array $data): void
    {
        $course->update($data);
    }
}
