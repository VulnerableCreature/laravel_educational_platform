<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CourseController extends Controller
{
	public function index(): View
	{
		return view('course.index');
	}
}
