<?php

namespace App\Http\Controllers\Main\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Service\Course\CourseService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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

    public function destroy(Course $course): RedirectResponse
    {
        $this->course->delete($course);
        return redirect()->route('course.index')->with('success', 'Курс успешно удалён!');
    }

    public function edit(Course $course): View
    {
        return view('course.edit', compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course): RedirectResponse
    {
        $data = $request->validated();

        $this->course->update($course, $data);
        return redirect()->route('course.show', compact('course'))->with('success', 'Курс успешно обновлен!');
    }
}
