<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public static function update() {
        $title = request('title');
        DB::table('page_info')->where('id', 1)->update(['title' => $title]);
        return redirect('/admin/edit');
    }

    public static function returnTitle() {
        return DB::table('page_info')->where('id', 1)->value('title');
    }

    public function admin() {
        return view('admin.admin');
    }

    public function edit() {        
        return view('admin.edit');
    }
}