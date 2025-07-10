<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Quiz\QuizController;
use App\Http\Controllers\Module\ModuleController;
use App\Http\Controllers\Chapter\ChapterController;
use App\Http\Controllers\Question\QuestionController;
use App\Http\Controllers\Choise\ChoiseController;
use App\Http\Controllers\Discount\DiscountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Guest routes (not logged in users)
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::post('login', [AuthController::class, 'loginSubmit'])->name('login.submit');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::match(['get', 'post'], 'forget-password', [AuthController::class, 'forgetPassword'])->name('password.forget');
});

Route::get('/admin/dashboard', [AdminController::class, 'index']); // after login dashboard
// users

Route::get('/admin/users', [UserController::class, 'list']);
// categories
Route::get('/admin/categories/create', [CategoryController::class, 'index']);
Route::get('/admin/categories', [CategoryController::class, 'list']);
// courses
Route::get('/admin/courses/create', [CourseController::class, 'index']);
Route::get('/admin/courses', [CourseController::class, 'show']);
// modules
Route::get('/admin/chapter/create', [ChapterController::class, 'index']);
Route::get('/admin/chapter', [ChapterController::class, 'show']);
// quiz
Route::get('/admin/question/create', [QuestionController::class, 'index']);
Route::get('/admin/question', [QuestionController::class, 'show']);
// Chooises
Route::get('/admin/choise/create', [ChoiseController::class, 'index']);
Route::get('/admin/choise', [ChoiseController::class, 'show']);
// Chooises
Route::get('/admin/discount/create', [DiscountController::class, 'index']);
Route::get('/admin/discount', [DiscountController::class, 'show']);
