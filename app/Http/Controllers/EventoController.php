<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EventoRequest;


class EventoController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function filtrar(Request $request){
        $busqueda = $request -> input_busqueda;
        $eventos = Evento::where('localizacion', 'LIKE', '%'. $busqueda .'%')
            ->orWhere('nombre', 'LIKE', '%'. $busqueda . '%')
            ->orWhere('fecha', 'LIKE', '%' . $busqueda . '%')
            ->paginate(6);

            $data = [
                'eventos' =>$eventos,
                'busqueda' =>$busqueda
            ];
            return view ('eventos.eventos', $data);
    }


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
    public function store(EventoRequest $request)
    {

        $evento = new Evento();
        $evento->nombre = $request->get('nombre_evento');
        $evento->localizacion = $request->get('loc_evento');
        $evento->fecha = $request->get('fecha_evento');
        $evento->descripcion = $request->get('desc_evento');

        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('public/img/eventos');
            $evento->imagen = Storage::url($imagePath);
        }

        $evento->media_publico = $request->get('media');
        $evento->save();
        return redirect()->route('eventos.index')->with('succes','Evento creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evento = Evento::findOrFail($id);
        //$evento->load('artistas');
        $evento->load('artistas.generos');
        $generosUnicos = $evento->artistas->unique('generos.id')->pluck('generos');

        //print $evento;
        //$artistas = Evento::findOrFail($id)->artistas;
        return view('eventos/e_detalles',compact('evento', 'generosUnicos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $evento = Evento::findOrFail($id);
        return view('eventos.editar_evento', compact('evento'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evento = Evento::findOrFail($id);

        $evento->nombre = $request->input('nombre_evento');
        $evento->localizacion = $request->input('loc_evento');
        $evento->fecha = $request->input('fecha_evento');
        $evento->descripcion = $request->input('desc_evento');
        $evento->imagen = $request->input('imagen');
        $evento->media_publico = $request->input('media');
        $evento->save();
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado correctamente.');

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
