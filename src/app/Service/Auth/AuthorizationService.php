<?php

namespace App\Service\Auth;

use Illuminate\Support\Facades\Auth;
use App\Contracts\Auth\AuthorizationContract;

class AuthorizationService implements AuthorizationContract
{
	public function login(array $credentials): bool
	{
		if (!Auth::attempt($credentials)) {
			return false;
		}

		return true;
	}

	public function logout(): void
	{
		Auth::logout();
	}
}
