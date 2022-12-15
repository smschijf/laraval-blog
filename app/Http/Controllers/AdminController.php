<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

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

    public function edit()
    {
        return view('admin.edit-post');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('succes', 'Post Deleted!');
    }

    public function editSettings()
    {
        return view('admin.settings');
    }

    public static function updateSettings()
    {
        $title = request('title');
        if ($title != null) {            
            DB::table('page_info')->where('id', 1)->update(['title' => $title]);
        }
        return redirect('/admin/settings');
    }

    public static function returnTitle()
    {
        return DB::table('page_info')->where('id', 1)->value('title');
    }
}
