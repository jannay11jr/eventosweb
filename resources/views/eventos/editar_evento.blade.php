@extends('p_base.p_base')

@section('titulo', 'Editar evento')

@section('contenido')

<div class="container">
    <h1>Editar evento</h1>
   <form action="{{route('eventos.update', $evento->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_evento">Nombre del Evento</label>
            <input type="text" class="form-control" id="nombre_evento" name="nombre_evento" placeholder="Nombre del Evento" value="{{$evento->nombre}}">
        </div>

        <div class="form-group">
            <label for="fecha_evento">Fecha del Evento</label>
            <input type="date" class="form-control" id="fecha_evento" name="fecha_evento" value="{{$evento->fecha}}">
        </div>

        <div class="form-group">
            <label for="localizacion">Localizacion</label>
            <input type="text" class="form-control" id="loc_evento" name="loc_evento" value="{{$evento->localizacion}}">
        </div>

        <div class="form-group">
            <label for="desc_evento">Descripción</label>
            <textarea class="form-control" id="desc_evento" name="desc_evento" {{$evento->descripcion}}></textarea>
        </div>


        <div class="form-group">
            <label for="imagen">Imagen</label>
             <input type="text" class="form-control-file" id="imagen" name="imagen" {{--accept="image/jpeg"--}} value="{{$evento->imagen}}">
        </div>

        <div class="form-group">
            <label for="media">Media publico</label>
            <input type="text" class="form-control-file" id="media" name="media" value="{{$evento->media_publico}}">
        </div>

        <button type="submit" class="btn btn-dark">Editar Evento</button>
    </form>
</div>




@endsection
