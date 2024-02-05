<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CourseController;


Route::group(['namespace' => 'Course', 'prefix' => 'course', 'middleware' => 'auth'], function () {
	Route::get('/', [CourseController::class, 'index'])->name('course.index');
});
