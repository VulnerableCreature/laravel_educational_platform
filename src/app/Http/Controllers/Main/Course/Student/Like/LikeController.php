<?php

namespace App\Http\Controllers\Main\Course\Student\Like;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\User\UserService;
use Illuminate\Http\RedirectResponse;

class LikeController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(Course $course): RedirectResponse
    {
        $user = $this->userService->user();
        $course->likes()->sync([$user->id]);
        return redirect()->route('course.show', compact('course'))->with('success', 'Вы поставила отметку нравится!');
    }
}
