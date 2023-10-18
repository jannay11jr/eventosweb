@extends('p_base.p_base')

@section('titulo', 'Detalles de evento')

@section('contenido')

<div class="container mt-5 ">
    <div class="card">
        <img src="{{$evento->imagen}}" class="card-img-top" alt="{{$evento->nombre}}">
        <div class="card-body">
            <h5 class="card-title">{{$evento->nombre}}</h5>
            <p class="card-text">{{$evento->descripcion}}</p>
            <p class="card-text"><strong>Localización:</strong> {{$evento->localizacion}}</p>
            <p class="card-text"><strong>Género:</strong> {{$evento->genero}}</p>
            <p class="card-text"><strong>Asistencia media:</strong>{{$evento->media_publico}}</p>
            <h2 style="text-align: center">Algunos artistas que actuaron:</h2>
            <div class="row justify-content-center">
                @foreach ($artistas as $artista)
                <div class="col text-center">
                    {{dd($artista)}}

                    <img src="{{$artista->img}}" class="img-fluid rounded-circle" alt="{{$artista->nombre}}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
