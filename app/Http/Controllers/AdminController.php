<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin.home');
  }
  public function posts()
  {
    return view('admin.posts', [
      'posts' => Post::all()
        ->sortByDesc('updated_at')
    ]);
  }
  public function create()
  {
    return view('admin.create');
  }

  public function store()
  {
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
