@extends('p_base.p_base')

@section('titulo', 'Crear Evento')

@section('contenido')
    <div class="container">
        <h1>Crear Evento</h1>
       <form action="{{route('eventos.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="localizacion">Localizacion</label>
                <input type="text" class="form-control" id="loc_evento" name="loc_evento">
            </div>

            <div class="form-group">
                <label for="desc_evento">Descripción</label>
                <textarea class="form-control" id="desc_evento" name="desc_evento"></textarea>
            </div>

            <div class="form-group">
                <label for="gnr_evento">Género</label>
                <select class="form-control" id="gnr_evento" name="gnr_evento">
                    @foreach($generos as $genero)
                        <option value="{{$genero->nombre}}"> {{$genero->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/jpeg">
            </div>

            <button type="submit" class="btn btn-dark">Crear Evento</button>
        </form>
    </div>
@endsection
