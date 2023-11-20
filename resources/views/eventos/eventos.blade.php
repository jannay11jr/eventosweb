@extends('p_base.p_base')

@section('titulo', 'Eventos')

@section('contenido')
    <h1>Página de eventos</h1>
    <p>Esta es la página de eventos</p>
    <form action="{{route('eventos.filtrar')}}" method="GET">
        <div class="form-group">
            <input type="text" class="form-control" id="input_busqueda" name="input_busqueda" placeholder="Escribe ciudad, nombre o fecha del evento que buscas:">
        </div>

        <button type="submit" class="btn btn-buscar">Buscar</button>
    </form>

    <div class="row cards-evento">
        @foreach($eventos as $evento)
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <img src="{{$evento->imagen}}" class="card-img-top" alt="Imagen del evento">
                    <div class="card-body card-evento">
                        <h5 class="card-title">{{$evento->fecha}}</h5>
                        <p class="card-text">{{$evento->nombre}}</p>
                        <a href="{{route('eventos.show', $evento)}}" class="btn btn-dark bounce-animation">Detalles</a>

                        @if(auth()->check() && auth()->user()->rol_id === 1)
                        <form action="{{route('eventos.destroy',$evento)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-evento-borrar">Borrar</button>
                        </form>
                        @endif

                        @if (auth()->check() && auth()->user()->rol_id === 1)
                        <form action="{{route('eventos.edit', $evento->id)}}" method="GET">

                            @csrf
                            <button class="btn btn-warning">Editar</button>
                        </form>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class=" pagin d-flex justify-content-center">
    {{$eventos->links()}}
    </div>
@endsection





