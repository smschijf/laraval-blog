<?php

use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
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
Route::get('/', function () {
  return view('home', [
    'posts' => Post::all()
  ]);
});

// Single post
Route::get('posts/{post:slug}', function (Post $post) {
  return view('post', [
    'post' => $post
  ]);
});