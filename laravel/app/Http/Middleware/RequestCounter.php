<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class RequestCounter
{
    public function handle(Request $request, Closure $next)
    {
        if ($userId = $request->header('user_id')) {
            $user = User::find($userId);
            if ($user) {
                $user->increment('requests_num');
            }
        }

        return $next($request);
    }
}
