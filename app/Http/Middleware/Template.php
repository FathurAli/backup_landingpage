<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Template
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $menuItems = [
            ['name' => 'Home', 'url' => '/', 'children' => []],
            // Tambahkan item lainnya sesuai kebutuhan
        ];
    
        view()->share('menuItems', $menuItems);
    
        return $next($request);
    }
    
}
