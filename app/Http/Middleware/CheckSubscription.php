<?php

namespace App\Http\Middleware;

use Closure;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if($request->user() && (!$request->user()->subscribed('cheer') && !$request->user()->subscribed('coach') && !$request->user()->subscribed('instructor'))){
        return redirect('billing');
      }
        return $next($request);
    }
}
