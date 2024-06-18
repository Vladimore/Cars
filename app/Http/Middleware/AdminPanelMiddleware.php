<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!isset($request->user()->role))
        {
            return redirect()->route('login');
        }
        else if ($request->user()->role !== 'admin')
        {
            return redirect()->route('cars.index');
        }
        return $next($request);
    }
}
