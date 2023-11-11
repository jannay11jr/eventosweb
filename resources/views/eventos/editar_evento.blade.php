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
        @if ($errors->has('nombre_evento'))
        <div class="text-danger"> {{ $errors->first('nombre_evento') }} </div>
        @endif

        <div class="form-group">
            <label for="fecha_evento">Fecha del Evento</label>
            <input type="date" class="form-control" id="fecha_evento" name="fecha_evento" value="{{$evento->fecha}}">
        </div>
        @if ($errors->has('fecha_evento'))
        <div class="text-danger"> {{ $errors->first('fecha_evento') }} </div>
        @endif

        <div class="form-group">
            <label for="localizacion">Localizacion</label>
            <input type="text" class="form-control" id="loc_evento" name="loc_evento" value="{{$evento->localizacion}}">
        </div>
        @if ($errors->has('loc_evento'))
        <div class="text-danger"> {{ $errors->first('loc_evento') }} </div>
        @endif

        <div class="form-group">
            <label for="desc_evento">Descripción</label>
            <textarea class="form-control" id="desc_evento" name="desc_evento" {{$evento->descripcion}}></textarea>
        </div>
        @if ($errors->has('desc_evento'))
        <div class="text-danger"> {{ $errors->first('desc_evento') }} </div>
        @endif



        <div class="form-group">
            <label for="imagen">Imagen</label>
             <input type="file" class="form-control-file" id="imagen" name="imagen" value="{{$evento->img}}">
        </div>
        @if ($errors->has('imagen'))
        <div class="text-danger"> {{ $errors->first('imagen') }} </div>
        @endif

        <div class="form-group">
            <label for="media">Media publico</label>
            <input type="text" class="form-control-file" id="media" name="media" value="{{$evento->media_publico}}">
        </div>
        @if ($errors->has('media'))
        <div class="text-danger"> {{ $errors->first('media') }} </div>
        @endif

        <button type="submit" class="btn btn-dark">Editar Evento</button>
    </form>
</div>




@endsection
