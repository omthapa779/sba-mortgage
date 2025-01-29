<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if admin key matches
        if ($request->input('admin_key') !== config('app.admin_key')) {
            return redirect()->back()->with('error', 'Unauthorized access');
        }

        return $next($request);
    }
}