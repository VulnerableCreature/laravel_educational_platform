<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
	public function index()
	{
		return view('register.index');
	}
	public function store()
	{
	}
}
