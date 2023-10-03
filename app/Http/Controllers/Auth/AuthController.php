<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('usuarios.login');
    }

    public function login(Request $request)
    {
        // Código para manejar el inicio de sesión
    }
}
