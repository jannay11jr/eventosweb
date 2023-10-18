<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistroMailable;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
          return view('usuarios.registro');
    }

    public function index()
    {
        return view('usuarios.registro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {



        $usuario = new Usuario();
        $usuario->nombre = $request->input('registro_nombre');
        $usuario->dni = $request->input('registro_dni');
        $usuario->email = $request->input('registro_email');
        $usuario->password = Hash::make($request->input('registro_password'));
        $usuario->rol_id = 2;
        $usuario ->save();


        Session::flash('registro_exitoso', 'La cuenta de usuario se ha creado con éxito');
        Mail::to('event-ticket@info.com')->send(new RegistroMailable($request->all()));


        return redirect()->route('registro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
