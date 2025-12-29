<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * tentando
     * 
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle(Request $request, Closure $next, ...$roles)
        {
            if (!Auth::check()) {
                return redirect()->route('login.show');
            }

            if (!in_array(Auth::user()->role, $roles)) {
                abort(403);
            }

            return $next($request);
        }
}   

/*
    use este para separar rota de premium e user (admin continua acessando as rotas)
        public function handle(Request $request, Closure $next, $role)
        {
            if (!Auth::check()) {
                return redirect()->route('login.show');
            }

            $userRole = Auth::user()->role;

            // Admin pode acessar qualquer rota
            if ($userRole === 'admin') {
                return $next($request);
            }

            // Outros usuários só acessam se bater o role
            if ($userRole !== $role) {
                abort(403, 'Acesso negado');
            }

            return $next($request);
        }
*/

/*
    use esse modelo se quiser separa 3 rotas diferente um para cada usuario
        public function handle($request, Closure $next, $role)
            {
                if (!Auth::check()) {
                    return redirect()->route('login.show');
                }

                if (Auth::user()->role !== $role) {
                    abort(403);
                }

                return $next($request);
            }
*/