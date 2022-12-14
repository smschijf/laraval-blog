<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
      return view('components.home', [
        'posts' => Post::all()
        ->sortByDesc('updated_at')
      ]);
    }

    public function show(Post $post) {
      return view('posts.post', [
        'post' => $post
      ]);
    }

}
