<?php

namespace App\Http\Controllers\Main\Course\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\Course\CourseService;
use App\Service\User\UserService;
use Illuminate\Http\RedirectResponse;

class StudentController extends Controller
{
    protected CourseService $courseService;
    protected UserService $userService;

    public function __construct(CourseService $courseService, UserService $userService)
    {
        $this->courseService = $courseService;
        $this->userService = $userService;
    }

    public function subscribe(Course $course): RedirectResponse
    {
        $user = $this->userService->user();

        $this->courseService->subscribe($course, $user);
        return redirect()->route('course.show', compact('course'))->with('success', 'Вы записались на курс!');
    }

    public function unsubscribe(Course $course): RedirectResponse
    {
        $user = $this->userService->user();

        $this->courseService->unsubscribe($course, $user);
        return redirect()->route('course.show', compact('course'))->with('success', 'Вы покинули курс!');
    }
}
