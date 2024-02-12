<?php

namespace App\Livewire\Decoration;

use App\Service\User\UserService;
use Illuminate\View\View;
use Livewire\Component;

class Profile extends Component
{
    protected UserService $userService;

    public function mount(UserService $service): void
    {
        $this->userService = $service;
    }
    public function render(): View
    {
        $user = $this->userService->user();

        $courses_user = $user->courses()->take(3)->get();

        return view('livewire.decoration.profile', compact('user', 'courses_user'));
    }
}
