<?php

namespace App\Http\Middleware\Admin;

use App\Service\User\UserService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $user = $this->userService->user();
        if ($user->role->id !== 1) {
            abort(403);
        }
        return $next($request);
    }
}
