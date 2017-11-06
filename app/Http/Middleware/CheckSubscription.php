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
      if($request->user() && (!$request->user()->subscribed('cheerleader-plan') || !$request->user()->subscribed('Instructor-Plan'))){
        return redirect('billing');
      }
        return $next($request);
    }
}
