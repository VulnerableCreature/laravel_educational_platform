<?php

namespace App\Policies;

use App\Models\User;

class AccessVerificationPolicy
{
    public function viewAdmin(User $user): bool
    {
        return $user->role->id == 1;
    }

    public function viewTeacher(User $user): bool
    {
        return $user->role->id == 2;
    }

    public function viewStudent(User $user): bool
    {
        return $user->role->id == 3;
    }
}
