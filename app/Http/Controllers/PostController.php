<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index()
  {
    return view('components.home', [
      'posts' => Post::all()
    ]);
  }

  public function show(Post $post)
  {
    return view('posts.post', [
      'post' => $post
    ]);
  }
  public function create()
  {
    return view('posts.create');
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
  public static function search(Request $request)
  {

    // IN DE REQUEST VARIABLE ZITTEN ALLE FORM VALUES
    $inputValue = $request->value; //kaas
    $dropdownValue = $request->category; //title, author, body

    if ($inputValue == '' || $dropdownValue == '') {
      return redirect()->route('blogs');
    }


    if ($dropdownValue == "everything") {
      $names = ['slug', 'title', 'excerpt', 'body'];
    } else if ($dropdownValue == "slug") {
      $names = ['slug', 'slug_title'];
    } else if ($dropdownValue == "title") {
      $names = ['title', 'title_status'];
    } else if ($dropdownValue == "excerpt") {
      $names = ['excerpt', 'body', 'conclusion'];
    }

    $query = Post::where($names[0], 'LIKE', '%' . $inputValue . '%');
    for ($i = 1; $i < (count($names) - 1); $i++) {
      $query->orWhere($names[$i], 'LIKE', '%' . $inputValue . '%');
    }
    $post = $query->get();

    return view('posts.post', [
      'post' => $post
    ]);
  }
}
