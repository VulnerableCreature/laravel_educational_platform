<?php

namespace App\Http\Controllers\Main\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateRoleRequest;
use App\Http\Requests\Admin\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminRoleController extends Controller
{
    public function create(): View
    {
        return view('admin.role.create');
    }

    public function store(CreateRoleRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Role::query()->create($data);
        return redirect()->route('admin.index')->with('success', 'Роль успешно добавлена');
    }

    public function edit(Role $role): View
    {
        return view('admin.role.edit', compact('role'));
    }

    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $data = $request->validated();
        $role->update($data);
        return redirect()->route('admin.index')->with('success', 'Роль обновлена');
    }

    public function delete(Role $role): RedirectResponse
    {
        $role->delete();
        return redirect()->route('admin.index')->with('success', 'Роль успешно удалена');
    }
}
