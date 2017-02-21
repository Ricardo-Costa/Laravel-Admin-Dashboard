<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // verificar se usuário nao possui permissao de acesso ao painel
        if (Auth::user()->role != $role) {
            return redirect(Auth::user()->role . '/dashboard/');
        }

        return $next($request);
    }
}
