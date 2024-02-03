<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;

Route::group(['namespace' => 'Main', 'prefix' => 'main', 'middleware' => 'auth'], function () {
	Route::get('/', [IndexController::class, 'index'])->name('main.index');
});
