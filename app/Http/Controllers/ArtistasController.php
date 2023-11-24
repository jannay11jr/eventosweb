<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistaRequest;
use App\Http\Requests\EditarArtistaRequest;
use App\Models\Artista;
use App\Models\Evento;
use App\Models\Genero;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{


    public function index()
    {
        $artistas = Artista::orderBy('nombre')->get();

            $artistas = Artista::paginate(6);
            return view ('eventos.artistas', compact('artistas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventos = Evento::all();
        return view('eventos.nuevo_artista', compact('eventos'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistaRequest $request)
    {

        $artista = new Artista();
        $artista->nombre = $request->get('nombre_artista');
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imageName = $request->file('imagen') ->getClientOriginalName();
            $destinationPath = public_path('/img/artistas');

            $imagen->move($destinationPath, $imageName);

            $artista->img = '/img/artistas/' . $imageName;
        }
        $artista->generos_id = $request->input('generos_id');
        $artista->save();

        $eventosSeleccionados = $request->input('eventos', []);
        $artista->eventos()->sync($eventosSeleccionados);

        return view('eventos.artista_creado')->with('success','Artista creado correctamente');

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
        $eventos = Evento::all();
        $artista = Artista::findOrFail($id);
        return view('eventos.editar_artista', compact('artista', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditarArtistaRequest $request, string $id)
    {
        $artista = Artista::findOrFail($id);
        $artista->nombre = $request->input('nombre_artista');
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imageName = $request->file('imagen') ->getClientOriginalName();
            $destinationPath = public_path('/img/artistas');

            $imagen->move($destinationPath, $imageName);

            $artista->img = '/img/artistas/' . $imageName;
        }
        $artista->generos_id = $request->input('generos_id');
        $artista->save();
        $eventosSeleccionados = $request->input('eventos', []);
        $artista->eventos()->sync($eventosSeleccionados);
        return redirect()->route('artistas.index')->with('success', 'Artista actualizado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Artista::findOrFail($id)->delete();
        $artistas = Artista::get();
        return redirect()->route('artistas.index')->with('succes', 'Artista eliminado correctamente');
    }
}
