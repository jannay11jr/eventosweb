<?php

namespace App\Http\Controllers;
use App\Models\Entrada;
use App\Models\Evento;


use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('entradas/entradas')->with('eventos', $eventos);
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
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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

    }
}
