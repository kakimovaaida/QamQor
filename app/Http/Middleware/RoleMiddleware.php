<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{

    public function handle(Request $request, Closure $next,...$rolenames): Response
    {
        if (Auth::check()) {
            foreach ($rolenames as $rolename) {
                $role = Auth::user()->role;

                if ($role && $role->name == $rolename) {
                    return $next($request);
                }
            }
        } else {
            return redirect()->route('services.index');
        }

        return response()->view('adm.errors.noperm');
    }
}
