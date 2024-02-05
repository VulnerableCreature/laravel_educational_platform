<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Auth\AuthorizationController;
use App\Http\Controllers\Register\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
	Route::get('/', [AuthorizationController::class, 'index'])->name('auth.index');
	Route::post('/login', [AuthorizationController::class, 'login'])->name('auth.login');
});

Route::group(['namespace' => 'Register', 'prefix' => 'register', 'middleware' => 'guest'], function () {
	Route::get('/', [RegistrationController::class, 'index'])->name('register.index');
	Route::post('/login', [RegistrationController::class, 'store'])->name('register.store');
});

Route::group(['namespace' => 'Main', 'prefix' => 'main', 'middleware' => 'auth'], function () {
	Route::post('/logout', [AuthorizationController::class, 'logout'])->name('auth.logout');

	Route::get('/', [IndexController::class, 'index'])->name('main.index');

	Route::group(['namespace' => 'Course', 'prefix' => 'courses'], function () {
		Route::get('/', [CourseController::class, 'index'])->name('course.index');
		Route::get('/course', [CourseController::class, 'show'])->name('course.show');
	});
});
