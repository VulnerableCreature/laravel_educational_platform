<?php

namespace App\Contracts\Course;

use Illuminate\Database\Eloquent\Collection;

interface CourseContract
{
	public function allCourse(): Collection;
}
