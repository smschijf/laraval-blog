<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminCheck;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Posts
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);


//Admin
Route::get('admin', [AdminController::class, 'index'])->middleware('admin');

Route::get('admin/settings', [AdminController::class, 'editSettings'])->middleware('admin');
Route::post('admin/update', 'App\Http\Controllers\AdminController@updateSettings')->middleware('admin');

Route::get('admin/posts', [AdminController::class, 'posts'])->middleware('admin');
Route::get('admin/posts/create', [AdminController::class, 'create'])->middleware('admin');
Route::post('admin/posts/create', [AdminController::class, 'store'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminController::class, 'edit'])->middleware('admin');
Route::delete('admin/posts/{post}', [AdminController::class, 'destroy'])->middleware('admin');

//Login/Register
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('sessions ', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');



// zoekken
Route::get('/search', [PostController::class, 'search'])->name('search');
