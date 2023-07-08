<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [PostController::class, 'home']);
Route::post('/posts',  [PostController::class, 'store']);
Route::get('/posts/create',  [PostController::class, 'create']);
Route::get('/posts/{post}',  [PostController::class, 'show']);
Route::get('/posts/show', [PostController::class, 'index']);
Route::put('/posts/{post}',  [PostController::class, 'update']);
Route::delete('/posts/{post}',  [PostController::class, 'delete']);
Route::get('/posts/{post}/edit',  [PostController::class, 'edit']);
Route::get('/categories/{category}', [CategoryController::class,'index']);
Route::get('/posts/show/{user}', [UserController::class, 'index']);

