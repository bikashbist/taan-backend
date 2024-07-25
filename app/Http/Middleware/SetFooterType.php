<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetFooterType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check for a specific query string parameter or path segment
        $type = $request->route('type', $request->query('type', 'default'));

        if ($type === 'member') {
            $request->merge(['footer_type' => 'member']);
        } else {
            $request->merge(['footer_type' => 'default']);
        }

        return $next($request);
    }
  
}
