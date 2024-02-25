<?php

namespace App\Http\Controllers\Main\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Service\User\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): View
    {
        $user = $this->userService->user();

        return view('profile.index', compact('user'));
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $user = $this->userService->user();
        $user->update($data);
        return redirect()->route('profile.index')->with('success', 'Данные успешно обновлены');
    }
}
