<?php

use App\Http\Controllers\Auth\AuthorizationController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
	Route::get('/', [AuthorizationController::class, 'index'])->name('auth.index');
	Route::post('/login', [AuthorizationController::class, 'login'])->name('auth.login');
});

Route::post('/logout', [AuthorizationController::class, 'logout'])->middleware('auth')->name('auth.logout');
