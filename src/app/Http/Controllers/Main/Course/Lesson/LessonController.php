<?php

namespace App\Http\Controllers\Main\Course\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\Lesson\LessonStoreRequest;
use App\Models\Course;
use App\Models\Material;
use App\Service\Course\CourseService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LessonController extends Controller
{
    protected CourseService $course;

    public function __construct(CourseService $service)
    {
        $this->course = $service;
    }

    public function create(Course $course): View
    {
        $visible = Material::visible();
        return view('course.lesson.create', compact('visible', 'course'));
    }

    public function store(LessonStoreRequest $request, Course $course): RedirectResponse
    {
        $data = $request->validated();

        $data['course_id'] = $course->id;

        $this->course->addMaterial($data);


        return redirect()->route('course.show', compact('course'))->with('success', 'Материал успешно добавлен!');
    }
}
