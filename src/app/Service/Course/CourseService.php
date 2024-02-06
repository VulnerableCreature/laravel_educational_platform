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

	public function getCourseById(Course $course): Course
	{
		/** @var Course $course */
		$course = Course::query()->find($course->id);

		return $course;
	}
}
