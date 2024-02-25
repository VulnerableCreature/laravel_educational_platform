<?php

namespace App\Http\Controllers\Main\Course\Personal;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\User\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonalController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): View
    {
        $user = $this->userService->user();

        $course_users = $user->courses()->get();
        $course_teachers = $user->course_teacher()->get();


        return view('course.personal.index', compact('course_users', 'course_teachers'));
    }
}
