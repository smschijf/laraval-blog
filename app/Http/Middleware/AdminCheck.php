<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminCheck
{   
    public function handle(Request $request, Closure $next)
    { 
        $userId = Auth::id();
        $isAdmin = DB::table('users')->where('id', $userId)->value('admin');   

        if ($isAdmin) {
            return $next($request);
        }
        else if (!$isAdmin) {
            abort(403, 'Unauthorized action.');
        }
    }
}
