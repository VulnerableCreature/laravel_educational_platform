<?php

namespace App\Http\Controllers\Course;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\Course\CourseService;

class CourseController extends Controller
{
    protected CourseService $course;

    public function __construct(CourseService $service)
    {
        $this->course = $service;
    }

    public function index(): View
    {
        $courses = $this->course->allCourse();

        return view('course.index', compact('courses'));
    }

    public function show(Course $course): View
    {
        return view('course.show', compact('course'));
    }

    public function create(): View
    {
        return view('course.create');
    }
}
