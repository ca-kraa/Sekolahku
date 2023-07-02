<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use App\Models\User;

// class RoleMiddleware
// {
//     public function handle(Request $request, Closure $next, string $role)
//     {
//         $user = $request->user();

//         if (!$user || !$user->hasRole($role)) {
//             return redirect('/');
//         }

//         return $next($request);
//     }
// }
