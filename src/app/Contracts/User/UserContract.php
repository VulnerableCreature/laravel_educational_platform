<?php

namespace App\Contracts\User;

use App\Models\User;


interface UserContract
{
	public function user(): User;
}
