@extends('p_base.p_base')

@section('titulo', 'Crear Evento')

@section('contenido')
    <div class="container">
        <h1>Crear Evento</h1>
       {{-- <form action="{{route(eventos.store)}}" method="POST" enctype="multipart/form-data"> --}}
            @csrf

            <div class="form-group">
                <label for="nombre_evento">Nombre del Evento</label>
                <input type="text" class="form-control" id="nombre_evento" name="nombre_evento" placeholder="Nombre del Evento">
            </div>

            <div class="form-group">
                <label for="fecha_evento">Fecha del Evento</label>
                <input type="date" class="form-control" id="fecha_evento" name="fecha_evento">
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <select class="form-control" id="genero" name="genero">
                    <option value="rock">Rock</option>
                    <option value="urbano">Urbano</option>
                    <option value="electronica">Música Electrónica</option>
                </select>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/jpeg">
            </div>

            <button type="submit" class="btn btn-primary">Crear Evento</button>
        </form>
    </div>
@endsection
