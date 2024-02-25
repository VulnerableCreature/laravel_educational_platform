<?php

namespace App\Policies;

use App\Models\User;

class AccessVerificationPolicy
{
    public function viewAdmin(User $user): bool
    {
        return $user->role->id === 5;
    }

    public function viewTeacher(User $user): bool
    {
        return $user->role->id === 6;
    }

    public function viewStudent(User $user): bool
    {
        return $user->role->id === 7;
    }
}
