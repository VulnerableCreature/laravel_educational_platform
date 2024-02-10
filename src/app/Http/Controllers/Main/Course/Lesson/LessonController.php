<?php

namespace App\Http\Controllers\Main\Course\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\Lesson\LessonStoreRequest;
use App\Http\Requests\Course\Lesson\LessonUpdateRequest;
use App\Models\Course;
use App\Models\Material;
use App\Service\Course\CourseService;
use App\Service\Course\Material\MaterialService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LessonController extends Controller
{
    protected CourseService $course;
    protected MaterialService $material;

    public function __construct(CourseService $courseService, MaterialService $materialService)
    {
        $this->course = $courseService;
        $this->material = $materialService;
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

    public function edit(Course $course, Material $material): View
    {
        $visible = Material::visible();
        return view('course.lesson.edit', compact('course', 'material', 'visible'));
    }

    public function update(LessonUpdateRequest $request, Course $course, Material $material): RedirectResponse
    {
        $data = $request->validated();

        $data['course_id'] = $course->id;

        $this->material->update($material, $data);
        return redirect()->route('course.show', compact('course'))->with('success', 'Материал успешно изменён!');
    }

    public function delete(Course $course, Material $material): RedirectResponse
    {
        $this->material->delete($material);
        return redirect()->route('course.show', compact('course'))->with('success', 'Материал успешно удален!');
    }
}
