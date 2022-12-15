<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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

// All posts
Route::get('/', [PostController::class, 'index'])->name('home');

// Single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Admin page
Route::get('admin', [AdminController::class, 'index']);

// Admin view posts
Route::get('admin/posts', [AdminController::class, 'posts']);

// Admin create post
Route::get('admin/posts/create', [AdminController::class, 'create']);
Route::post('admin/posts/create', [AdminController::class, 'store']);

// Admin edit post

Route::get('admin/posts/{post}/edit', [AdminController::class, 'edit']);



// mysql.server start