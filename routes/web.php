<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminCheck;
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

// Admin create post
// Route::get('admin', [AdminController::class, 'admin'])->middleware('admin');

Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::get('admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('admin/update', 'App\Http\Controllers\AdminController@update')->name('admin.update');
// Route::get('admin/posts/create', [PostController::class, 'create']);
// Route::post('admin/posts', [PostController::class, 'store']);




// mysql.server start
