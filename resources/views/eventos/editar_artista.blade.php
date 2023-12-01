@extends('p_base.p_base')

@section('titulo', 'Editar Artista')

@section('contenido')
    <div class="container">
        <h1 class="titulo-editar">Editar artista</h1>
       <form action="{{route('artistas.update', $artista->id)}}" method="POST" enctype="multipart/form-data" class="form-editar form-nuevo">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre_artista">Nombre del artista</label>
                <input type="text" class="form-control" id="nombre_artista" name="nombre_artista" placeholder="Nombre del artista" value="{{$artista->nombre}}">
            </div>
            @if ($errors->has('nombre_artista'))
            <div class="text-danger"> {{ $errors->first('nombre_artista') }} </div>
            @endif



            <div class="form-group">
                <label for="imagen">Imagen</label>
                 <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" value="{{$artista->img}}">
            </div>

            <div>
            <select class="form-select" name="generos_id" id="generos_id">
                <option value="1" @if($artista->generos_id == 1) selected @endif >Rock</option>
                <option value="2" @if($artista->generos_id == 2) selected @endif>Pop</option>
                <option value="3" @if($artista->generos_id == 3) selected @endif>Urbano</option>
                <option value="4" @if($artista->generos_id == 4) selected @endif>Electronica</option>
                <option value="5" @if($artista->generos_id == 5) selected @endif>Reggaeton</option>
            </select>
        </div>

        <div class="form-group">
            <label for="eventos">Eventos en los que actuará</label>
            <select class="form-select" name="eventos[]" id="eventos" multiple>
                @foreach($eventos as $evento)
                <option value="{{ $evento->id }}" @if(in_array($evento->id, $artista->eventos->pluck('id')->toArray())) selected @endif>{{ $evento->nombre }}</option>
                @endforeach
            </select>
        </div>


            <button type="submit" class="btn btn-dark">Editar artista</button>
        </form>
    </div>
@endsection
