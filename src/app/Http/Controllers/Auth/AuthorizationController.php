<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AuthorizationController extends Controller
{
	public function index(): View
	{
		return view('auth.index');
	}
}
