<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function loginForm(){
        return view('usuarios.login');//antes aqui escrito auth.login
    }

    public function login(Request $request){
        $credenciales = $request->only ('email','password');

        if(Auth::attempt($credenciales)){
            return redirect()->intended(route('eventos.index'));//antes aqui eventos.eventos
        }
        else {
            $error = "Usuario o contraseña  incorrectos";
            return view ('usuarios.login', compact('error'));//aqui tambien escrito auth.login
        }
        return view('inicio.inicio');
    }

    public function logout(){
        Auth::logout();
        return view('inicio.inicio');
    }
}
