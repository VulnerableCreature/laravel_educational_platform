<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterRequest;
use App\Service\Register\RegisterService;
use Illuminate\Http\RedirectResponse;

class RegistrationController extends Controller
{
	protected RegisterService $service;

	public function __construct(RegisterService $service)
	{
		$this->service = $service;
	}

	public function index()
	{
		return view('register.index');
	}
	public function store(RegisterRequest $request): RedirectResponse
	{
		$data = $request->validated();

		$this->service->register($data);
		return redirect()->route('auth.index');
	}
}
