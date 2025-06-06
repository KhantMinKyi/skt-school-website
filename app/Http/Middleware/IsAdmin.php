<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        $id = Auth::user()->id;

        $check = User::where('id', $id)
            ->where('is_admin', 1)
            ->first();

        if ($check) {
            return $next($request);
        } else {
            Auth::logout();
            return redirect('administration-panel/login');
        }

        return $next($request);
    }
}
