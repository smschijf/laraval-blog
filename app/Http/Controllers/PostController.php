<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
      return view('components.home', [
        'posts' => Post::all()
      ]);
    }

    public function show(Post $post) {
      return view('posts.post', [
        'post' => $post
      ]);
    }

    public function create() {
      return view('posts.create');
    }

    public function store() {
      $attributes = request()->validate([
        'title' => 'required',
        'slug' => ['required', Rule::unique('posts', 'slug')],
        'excerpt' => 'required',
        'body' => 'required',
      ]);

      Post::create($attributes);

      return redirect('/');
    }
}
