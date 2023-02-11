<?php

namespace App\Http\Middleware;

use App\Subscribers;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscribersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $ids = DB::table('subscribers')->pluck('user_id');

        foreach ($ids as $id) {
            if ($id == $user->id) {
                return redirect()->back()->with('error', 'You are already subscribed');
            }
        }

        return $next($request); // даем пользователю пройти дальше
    }
}
