@extends('p_base.p_base')

@section('titulo', 'Crear Evento')

@section('contenido')
    <div class="container">
        <h1 class="titulo-nuevo">Crear Evento</h1>
       <form action="{{route('eventos.store')}}" method="POST" enctype="multipart/form-data" class="form-nuevo">
            @csrf
            @if(session('error'))
            <div class="alert alert-danger">
            {{ session('error') }}
            </div>
            @endif

            <div class="form-group">
                <label for="nombre_evento">Nombre del Evento</label>
                <input type="text" class="form-control" id="nombre_evento" name="nombre_evento" placeholder="Nombre del Evento" value={{old('nombre_evento')}}>
            </div>
            @if ($errors->has('nombre_evento'))
            <div class="text-danger"> {{ $errors->first('nombre_evento') }} </div>
            @endif

            <div class="form-group" width="40px">
                <label for="fecha_evento">Fecha del Evento</label>
                <input type="date" class="form-control" id="fecha_evento"  name="fecha_evento" value={{old('fecha_evento')}}>
            </div>
            @if ($errors->has('fecha_evento'))
            <div class="text-danger"> {{ $errors->first('fecha_evento') }} </div>
            @endif

            <div class="form-group">
                <label for="loc_evento">Localizacion</label>
                <input type="text" class="form-control" id="loc_evento" name="loc_evento" value={{old('loc_evento')}}>
            </div>
            @if ($errors->has('loc_evento'))
            <div class="text-danger"> {{ $errors->first('loc_evento') }} </div>
            @endif

            <div class="form-group">
                <label for="desc_evento">Descripción</label>
                <textarea class="form-control" id="desc_evento" name="desc_evento" >{{old('desc_evento')}}</textarea>
            </div>
            @if ($errors->has('desc_evento'))
            <div class="text-danger"> {{ $errors->first('desc_evento') }} </div>
            @endif


            <div class="form-group">
                <label for="imagen">Imagen</label>
                 <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" >
            </div>
            @if ($errors->has('imagen'))
            <div class="text-danger"> {{ $errors->first('imagen') }} </div>
            @endif

            <div class="form-group">
                <label for="media">Media publico</label>
                <input type="text" class="form-control-file" id="media" name="media" value={{old('media')}}>
            </div>
            @if ($errors->has('media'))
            <div class="text-danger"> {{ $errors->first('media') }} </div>
            @endif

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control-file" id="precio" name="precio" value={{old('precio')}}>
            </div>
            @if ($errors->has('precio'))
            <div class="text-danger"> {{ $errors->first('precio') }} </div>
            @endif


            <button type="submit" class="btn btn-dark">Crear Evento</button>
        </form>
    </div>
@endsection
