<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'create']);
    Route::get('/home/{user}', [PostController::class, 'home']);
    Route::post('/posts',  [PostController::class, 'store']);
    Route::get('/posts/{user}/create',  [PostController::class, 'create']);
    Route::get('/posts/event/{user}', [UserController::class, 'show']);
    Route::get('/posts/{post}/edit',  [PostController::class, 'edit']);
    Route::get('/posts/{post}',  [PostController::class, 'show']);
    Route::put('/posts/{post}',  [PostController::class, 'update']);
    Route::delete('/posts/event/{user}/{post}',  [PostController::class, 'delete']);
    Route::get('/posts/show', [PostController::class, 'index']);
    Route::get('/posts/show/{user}', [UserController::class, 'index']);
    Route::get('/create', [UserController::class, 'create']);
    Route::put('/create/{user}', [UserController::class, 'store_period']);
});

Route::middleware('auth')->group(function () {
    Route::get('/tasks/{user}/{post}', [TaskController::class, 'show']);
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::put('/tasks/{post}/{task}/achievement', [TaskController::class, 'achievement']);
});

require __DIR__.'/auth.php';
