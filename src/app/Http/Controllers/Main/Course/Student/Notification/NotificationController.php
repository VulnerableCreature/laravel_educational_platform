<?php

namespace App\Http\Controllers\Main\Course\Student\Notification;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Material;
use App\Service\Notifier\EmailService;
use App\Service\User\UserService;
use Illuminate\Http\RedirectResponse;

class NotificationController extends Controller
{
    protected EmailService $emailService;
    protected UserService $userService;

    public function __construct(EmailService $emailService, UserService $userService)
    {
        $this->emailService = $emailService;
        $this->userService = $userService;
    }

    public function store(Course $course, Material $material): RedirectResponse
    {
        $user = $this->userService->user();
        $this->emailService->send($user, $course, $material);
        return redirect()->route('course.show', compact('course'))->with('success', 'Напоминание установлено!');
    }
}
