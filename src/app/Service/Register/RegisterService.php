<?php

namespace App\Service\Register;

use App\Contracts\Register\RegisterContract;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterService implements RegisterContract
{
	public function register(array $data): void
	{
		$data['password'] = Hash::make($data['password']);

		User::query()->firstOrCreate(['email' => $data['email'], 'login' => $data['login']], $data);
	}
}
