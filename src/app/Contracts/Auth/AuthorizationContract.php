<?php

namespace App\Contracts\Auth;

interface AuthorizationContract
{
	public function login(array $credentials): bool;
	public function logout(): void;
}
