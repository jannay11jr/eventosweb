<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $eventos = Evento::orderBy('fecha')->get();
            $eventos = Evento::paginate(6);
            return view ('eventos.eventos', compact('eventos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventos = Evento::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->name = $request->get('nombre_evento');
        $evento->localizacion = $request->get('loc_evento');
        $evento->fecha = $request->get('fecha_evento');
        $evento->descripcion = $request->get('desc_evento');
        $evento->genero = $request->get('gnr_evento');
        $evento->save();
        return redirect()->route('eventos.index')->with('succes','Evento creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos/e_detalles',compact('evento'));
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
        Evento::findOrFail($id)->delete();
        $eventos = Evento::get();
        //return view('eventos/eventos', compact('eventos'));
        return redirect()->route('eventos.index')->with('succes', 'Evento eliminado correctamente');
    }
}
