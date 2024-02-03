<?php

namespace App\Service\User;

use App\Contracts\User\UserContract;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserService implements UserContract
{
	public function user(): User
	{
		/** @var int $id */
		$id = Auth::id();

		/** @var User $user */
		$user = User::query()->find($id);
		return $user;
	}
}
