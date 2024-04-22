<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redireccionar al usuario a la página deseada
            return redirect()->route('home'); // Reemplaza 'index' con el nombre de la ruta de tu página deseada
        }

        // Si la autenticación falla, redireccionar de vuelta con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Lógica de registro aquí
    }

    public function logout(Request $request)
    {
        // Lógica de cierre de sesión aquí
    }
}
