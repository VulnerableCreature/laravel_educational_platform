<?php

namespace App\Service\Notifier;

use App\Contracts\Notifier\NotifierContract;
use App\Jobs\Email\EmailSendNotification;
use App\Models\Course;
use App\Models\Material;
use App\Models\User;

class EmailService implements NotifierContract
{
    public function __construct()
    {
    }

    public function send(User $user, Course $course, Material $material): void
    {
        EmailSendNotification::dispatch($user, $course, $material)->delay(now()->addMinutes(20)); // 20 minute
        EmailSendNotification::dispatch($user, $course, $material)->delay(now()->addHours(1)); // 1 hour
        EmailSendNotification::dispatch($user, $course, $material)->delay(now()->addDays(1)); // 1 day
        EmailSendNotification::dispatch($user, $course, $material)->delay(now()->addDays(2)); // 2 days
        EmailSendNotification::dispatch($user, $course, $material)->delay(now()->addDays(3)); // 3 days
    }
}
