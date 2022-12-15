<?php

use App\Http\Controllers\PostController;
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

// All posts
Route::get('/', [PostController::class, 'index'])->name('home');

// Single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Admin create post
Route::get('admin/posts/create', [PostController::class, 'create']);
Route::post('admin/posts', [PostController::class, 'store']);


// register users and adminR
// Route::get('/register', function () {
//     return 'hello';
// });

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('sessions ', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
// mysql.server start