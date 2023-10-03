<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = array(
            array("fecha" => "26/10/2023",
            "nombre" => "Ozuna",
            "imagen" => "img/eventos/ozuna.jpg",
            "genero" => "Reggaeton"),
            array("fecha" => "26/1/2024",
            "nombre" => "Medusa Festival",
            "imagen" => "img/eventos/medusa.jpg",
            "genero" => "Electrónica"),
            array("fecha" => "2/11/2023",
            "nombre" => "Zevra Festival",
            "imagen" => "img/eventos/zevra.jpg",
            "genero" => "Urbano"),
            array("fecha" => "26/10/2023",
            "nombre" => "Monegros",
            "imagen" => "img/eventos/monegros.jpeg",
            "genero" => "Electrónica"),
            array("fecha" => "26/10/2024",
            "nombre" => "Summer Story",
            "imagen" => "img/eventos/summer_story.jpg",
            "genero" => "Electrónica"),
            array("fecha" => "26/10/2024",
            "nombre" => "Malú",
            "imagen" => "img/eventos/malu.jpeg",
            "genero" => "Pop"),
            array("fecha" => "04/10/2025",
            "nombre" => "Estopa",
            "imagen" => "img/eventos/estopa.jpg",
            "genero" => "Pop"),
            array("fecha" => "31/12/2023",
            "nombre" => "Travis Scott",
            "imagen" => "img/eventos/travis_scott.jpg",
            "genero" => "Rap"),
        );
        return view('eventos/eventos', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Mostrando ficha de evento  $id";
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
