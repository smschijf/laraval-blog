<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
  return view('detail');
});

// Route::get('home/{post}', function ($slug) {
//   $path = __DIR__."/../resources/posts/{$slug}.html";

//   if (! file_exists($path)) {

//       //ddd('file does not exist');
//       return redirect('/');
//       //abort(404);
//   }

//   $post = file_get_contents($path);

//   return view('post', [
//       'post' => $post 
//   ]);
// })->where('post','[A-z_\-]+');//regular expression