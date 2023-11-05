@extends('p_base.p_base')

@section('titulo', 'Crear Artista')

@section('contenido')
    <div class="container">
        <h1>Crear artista</h1>
       <form action="{{route('artistas.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nombre_evento">Nombre del artista</label>
                <input type="text" class="form-control" id="nombre_artista" name="nombre_artista" placeholder="Nombre del artista">
            </div>
            @if ($errors->has('nombre_artista'))
            <div class="text-danger"> {{ $errors->first('nombre_artista') }} </div>
            @endif


            <div class="form-group">
                <label for="imagen">Imagen</label>
                 <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
            </div>
            @if ($errors->has('imagen'))
            <div class="text-danger"> {{ $errors->first('imagen') }} </div>
            @endif
            <div>
            <select class="form-select" name="generos_id" id="generos_id">
                <option value="1">Rock</option>
                <option value="2">Pop</option>
                <option value="3">Urbano</option>
                <option value="4">Electronica</option>
                <option value="5">Reggaeton</option>
            </select>
        </div>

        <div class="form-group">
            <label for="eventos">Eventos en los que actuará</label>
            <select class="form-select" name="eventos[]" id="eventos" multiple>
                @foreach($eventos as $evento)
                    <option value="{{ $evento->id }}">{{ $evento->nombre }}</option>
                @endforeach
            </select>
        </div>

            <button type="submit" class="btn btn-dark">Crear artista</button>
        </form>
    </div>
@endsection
