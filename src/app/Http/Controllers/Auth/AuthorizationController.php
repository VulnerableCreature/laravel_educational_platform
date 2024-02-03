<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthorizationRequest;
use App\Service\Auth\AuthorizationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AuthorizationController extends Controller
{
	protected AuthorizationService $service;

	public function __construct(AuthorizationService $auth)
	{
		$this->service = $auth;
	}
	public function index(): View
	{
		return view('auth.index');
	}

	public function login(AuthorizationRequest $request): RedirectResponse
	{
		$credentials = $request->validated();
		if ($this->service->login($credentials)) {
			return redirect()->route('main.index');
		}
		return redirect()->back()->withErrors(['login' => 'Логин или пароль введены неверно']);
	}

	public function logout(): RedirectResponse
	{
		$this->service->logout();
		return redirect()->route('auth.index');
	}
}
