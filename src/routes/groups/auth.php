<?php

use App\Http\Controllers\Auth\AuthorizationController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
	Route::get('/', [AuthorizationController::class, 'index'])->name('auth.index');
	Route::post('/', [AuthorizationController::class, 'store'])->name('auth.store');
});
