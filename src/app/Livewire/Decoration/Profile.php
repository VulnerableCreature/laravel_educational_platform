<?php

namespace App\Livewire\Decoration;

use App\Service\User\UserService;
use Livewire\Component;

class Profile extends Component
{
    protected UserService $userService;

    public function mount(UserService $service)
    {
        $this->userService = $service;
    }
    public function render()
    {
        $user = $this->userService->user();
        return view('livewire.decoration.profile', compact('user'));
    }
}
