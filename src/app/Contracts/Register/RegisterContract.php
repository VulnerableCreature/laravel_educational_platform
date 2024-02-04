<?php

namespace App\Contracts\Register;

interface RegisterContract
{
	public function register(array $data): void;
}
