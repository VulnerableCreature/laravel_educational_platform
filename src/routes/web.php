<?php

use App\Http\Controllers\Auth\AuthorizationController;
use App\Http\Controllers\Main\Admin\AdminController;
use App\Http\Controllers\Main\Admin\Role\AdminRoleController;
use App\Http\Controllers\Main\Admin\User\AdminUserController;
use App\Http\Controllers\Main\Course\CourseController;
use App\Http\Controllers\Main\Course\Lesson\LessonController;
use App\Http\Controllers\Main\Course\Personal\PersonalController;
use App\Http\Controllers\Main\Course\Student\Like\LikeController;
use App\Http\Controllers\Main\Course\Student\Notification\NotificationController;
use App\Http\Controllers\Main\Course\Student\StudentController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\Profile\ProfileController;
use App\Http\Controllers\Register\RegistrationController;
use Illuminate\Support\Facades\Route;

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
        Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
        Route::get('/course/{course}', [CourseController::class, 'show'])->name('course.show');
        Route::get('/course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::patch('/course/{course}', [CourseController::class, 'update'])->name('course.update');
        Route::delete('/course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');

        Route::group(['namespace' => 'Lesson', 'prefix' => 'course/{course}/lesson', 'middleware' => 'teacher'], function () {
            Route::get('/create', [LessonController::class, 'create'])->name('course.lesson.create');
            Route::post('/', [LessonController::class, 'store'])->name('course.lesson.store');
            Route::get('/material/{material}/edit', [LessonController::class, 'edit'])->name('course.lesson.edit');
            Route::patch('/material/{material}/', [LessonController::class, 'update'])->name('course.lesson.update');
            Route::delete('/material/{material}/', [LessonController::class, 'delete'])->name('course.lesson.delete');
        });

        Route::group(['namespace' => 'Student', 'prefix' => 'student', 'middleware' => 'student'], function () {
            Route::post('/{course}/subscribe', [StudentController::class, 'subscribe'])->name('course.student.subscribe');
            Route::post('/{course}/unsubscribe', [StudentController::class, 'unsubscribe'])->name('course.student.unsubscribe');

            Route::group(['namespace' => 'Notification', 'prefix' => 'notification/course/{course}/material/{material}'], function (){
                Route::post('/', [NotificationController::class, 'store'])->name('student.notification.store');
            });

            Route::group(['namespace' => 'Like', 'prefix' => 'like'], function (){
                Route::post('/{course}', [LikeController::class, 'store'])->name('student.like.store');
            });
        });

        Route::group(['namespace' => 'Personal', 'prefix' => 'personal'], function () {
            Route::get('/', [PersonalController::class, 'index'])->name('course.personal.index');
        });
    });

    Route::group(['namespace' => 'Admin', 'prefix' => 'administrator', 'middleware' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::group(['namespace' => 'User', 'prefix' => 'user'], function (){
            Route::get('/{user}', [AdminUserController::class, 'show'])->name('admin.user.show');
            Route::get('/edit/{user}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
            Route::patch('/{user}', [AdminUserController::class, 'update'])->name('admin.user.update');
            Route::delete('/{user}', [AdminUserController::class, 'delete'])->name('admin.user.delete');
        });

        Route::group(['namespace' => 'Role', 'prefix' => 'role'], function (){
            Route::get('/create', [AdminRoleController::class, 'create'])->name('admin.role.create');
            Route::post('/', [AdminRoleController::class, 'store'])->name('admin.role.store');
            Route::get('/{role}/edit', [AdminRoleController::class, 'edit'])->name('admin.role.edit');
            Route::patch('/{role}', [AdminRoleController::class, 'update'])->name('admin.role.update');
            Route::delete('/{role}', [AdminRoleController::class, 'delete'])->name('admin.role.delete');
        });
    });

    Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function (){
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    });
});
