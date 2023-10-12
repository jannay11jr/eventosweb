@extends('p_base.p_base')

@section('titulo', 'Eventos')

@section('contenido')
    <h1>Página de eventos</h1>
    <p>Esta es la página de eventos</p>
    <form action="" method="GET">
        <div class="form-group">
            <input type="text" class="form-control" id="input_busqueda" name="input_busqueda" placeholder="Escribe ciudad, género o fecha del evento que buscas:">
        </div>

        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <div class="row">
        @foreach($eventos as $evento)
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <img src="" class="card-img-top" alt="Imagen del evento">
                    <div class="card-body">
                        <h5 class="card-title">{{$evento->fecha}}</h5>
                        <p class="card-text">{{$evento->name}} {{$evento->genero}}</p>
                        <a href="{{route('eventos.show', $evento)}}" class="btn btn-dark">Detalles</a>

                        <form action="{{route('eventos.destroy',$evento)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Borrar</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class=" pagin d-flex justify-content-center">
    {{$eventos->links()}}
    </div>
@endsection





