@extends('p_base.p_base')

@section('titulo', 'Eventos')

@section('contenido')
    <h1>Página de eventos</h1>
    <p>Esta es la página de eventos</p>
    <div class="row">
        @foreach($eventos as $evento)
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <img src="{{ asset($evento['imagen']) }}" class="card-img-top" alt="Imagen del evento">
                    <div class="card-body">
                        <h5 class="card-title">{{$evento["fecha"]}}</h5>
                        <p class="card-text">{{$evento["nombre"]}} ({{$evento["genero"]}})</p>
                        <a href="{{route('detalles')}}" class="btn btn-dark">Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection





