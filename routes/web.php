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

Route::get('admin', [AdminController::class, 'index'])->name('admin');

Route::get('admin/settings', [AdminController::class, 'editSettings'])->name('admin.settings');
Route::post('admin/update', 'App\Http\Controllers\AdminController@update')->name('admin.update');

Route::get('admin/posts', [AdminController::class, 'posts']);
Route::get('admin/posts/create', [AdminController::class, 'create']);
Route::post('admin/posts/create', [AdminController::class, 'store']);
Route::get('admin/posts/{post}/edit', [AdminController::class, 'edit']);
Route::delete('admin/posts/{post}', [AdminController::class, 'destroy']);


// ->middleware('admin');