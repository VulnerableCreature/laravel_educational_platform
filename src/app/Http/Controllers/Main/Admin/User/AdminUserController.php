<?php

namespace App\Http\Controllers\Main\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class AdminUserController extends Controller
{
    public function show(User $user): View
    {
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user): View
    {
        $roles = Role::all()->sortBy('title');
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('admin.user.show', compact('user'))->with('success', 'Данные пользователя обновлены');
    }

    public function delete(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Пользователь удалён');
    }
}
