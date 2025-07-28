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
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'commingSonn']);
Route::get('/users', [UserController::class, 'index']);


// Guest routes (not logged in users)
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('login', [LoginController::class, 'store']);
    Route::post('reset-password', [LoginController::class, 'resetPassword']);
    Route::match(['get', 'post'], 'forget-password', [LoginController::class, 'forgetPassword']);
});

Route::get('/admin/dashboard', [AdminController::class, 'index']);


Route::get('/admin/users', [UserController::class, 'list']);
// categories
Route::prefix('admin')->name('admin.')->group(function () {

    // Category Routes
    // Route::get('/categories', [CategoryController::class, 'show'])->name('categories.index'); // Changed from 'show' to 'index' for standard naming
    Route::get('/categories/create', [CategoryController::class, 'index'])->name('categories.create'); // Should use 'create' instead of 'index'
    Route::get('/categories', [CategoryController::class, 'show'])->name('categories');
    Route::get('/categories/list', [CategoryController::class, 'list'])->name('categories.list');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit/', [CategoryController::class, 'edit'])->name('categories.edit'); // Changed POST to GET, more RESTful
    Route::post('/categories/{id}/update/', [CategoryController::class, 'update'])->name('categories.update'); // Optional: add update route

    // Course Routes
    Route::get('/courses/create', [CourseController::class, 'index'])->name('courses.create');
    Route::get('/courses', [CourseController::class, 'show'])->name('courses');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/list', [CourseController::class, 'list'])->name('courses.list');
    Route::post('/courses', [CourseController::class, 'list'])->name('courses');
    Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
});



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
