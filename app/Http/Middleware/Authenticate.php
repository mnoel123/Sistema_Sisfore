<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        // Verificar si el usuario está autenticado
        if (Auth::guard($guards)->check()) {
            // Obtener el usuario autenticado
            $user = Auth::guard($guards)->user();
    
            // Verificar si el usuario está inactivo
            if ($user && $user->estado !== 'activo') {
                // Si está inactivo, cerrar la sesión y redirigir a una ruta de error
                Auth::guard('web')->logout();
                return redirect()->route('usuario.inactivo');
            }
        }
    
        // Continuar con la solicitud normal
        return $next($request);
    }
}   
