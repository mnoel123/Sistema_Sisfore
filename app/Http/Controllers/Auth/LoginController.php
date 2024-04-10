<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Asegúrate de importar el modelo User

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request);
        
        // Verificar si el usuario está activo y no está bloqueado
        $user = User::where('email', $credentials['email'])->first();
        
        if ($user) {
            if ($user->estado !== 'activo' || $user->bloqueado) {
                return false; // Usuario inactivo o bloqueado, no intentar iniciar sesión
            }
        }

        return $this->guard()->attempt(
            $credentials,
            $request->filled('remember')
        );
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $message = trans('auth.failed');

        if ($this->guard()->validate(['email' => $request->email, 'password' => $request->password])) {
            // Si las credenciales son válidas pero el usuario está inactivo o bloqueado, mostrar mensaje correspondiente
            $user = $this->guard()->getLastAttempted();
            if ($user) {
                if ($user->estado === 'inactivo') {
                    $message = trans('auth.user_inactive');
                } elseif ($user->bloqueado) {
                    $message = trans('auth.user_blocked');
                }
            }
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => $message,
            ]);
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);
    }
}
