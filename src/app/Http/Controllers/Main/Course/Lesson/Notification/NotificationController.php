<?php

namespace App\Http\Controllers\Main\Course\Lesson\Notification;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Material;
use App\Service\Course\CourseService;
use App\Service\Course\Material\MaterialService;
use App\Service\Notifier\EmailService;
use Illuminate\Http\RedirectResponse;

class NotificationController extends Controller
{
    protected CourseService $course;
    protected MaterialService $material;
    protected EmailService $emailService;

    public function __construct(CourseService $courseService, MaterialService $materialService, EmailService $emailService)
    {
        $this->course = $courseService;
        $this->material = $materialService;
        $this->emailService = $emailService;
    }
    public function store(Course$course, Material $material): RedirectResponse
    {
        // TODO: Подумать над тем как будет вызываться сервис и упаковываться email уведомление пользователю
        // TODO: Добавить таблицу users_notifications
        // TODO: Добавить таблицу course_likes
        return redirect()->route('course.show', compact('course'))->with('success', 'Напоминание установлено!');
    }
}
