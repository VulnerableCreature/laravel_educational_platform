<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main', 'prefix' => 'main', 'middleware' => 'auth'], function () {
	Route::get('/', [IndexController::class, 'index'])->name('main.index');
});
