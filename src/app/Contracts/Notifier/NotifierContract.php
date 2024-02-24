<?php

namespace App\Contracts\Notifier;

use App\Models\Course;
use App\Models\Material;
use App\Models\User;

interface NotifierContract
{
    public function send(User $user, Course $course, Material $material): void;
}
