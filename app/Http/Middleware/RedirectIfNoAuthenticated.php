<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfNoAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->is('admin') || $request->is('admin/*')) {
            if (!Auth::guard('admin')->check()) {
                toastr()->error('Vui lòng đăng nhập để truy cập trang quản trị.');
            }
        } else {
            if (!Auth::guard('web')->check()) {
                toastr()->error('Vui lòng đăng nhập để thực hiện chức năng này.');
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}