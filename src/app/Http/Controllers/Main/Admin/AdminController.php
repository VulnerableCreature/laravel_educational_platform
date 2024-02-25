<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $users = User::all()->sortBy('surname');
        $roles = Role::all()->sortBy('title');
        return view('admin.index', compact('users', 'roles'));
    }
}
