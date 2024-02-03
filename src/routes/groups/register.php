<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register\RegistrationController;

Route::group(['namespace' => 'Register', 'prefix' => 'register', 'middleware' => 'guest'], function () {
	Route::get('/', [RegistrationController::class, 'index'])->name('register.index');
	Route::post('/login', [RegistrationController::class, 'store'])->name('register.store');
});
