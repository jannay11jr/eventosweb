@extends('p_base.p_base')

@section('titulo', 'Artistas')

@section('contenido')
    <h1>Página de artistas</h1>
    <p>Esta es la página de artistas</p>


    <div class="row">
        @foreach($artistas as $artista)
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <img src="{{$artista->img}}" class="card-img-top" alt="Imagen del artista">
                    <div class="card-body">
                        <p class="card-text">{{$artista->nombre}}</p>
                        <p>({{$artista->generos->nombre}})</p>

                         <form action="{{route('artistas.destroy',$artista)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-evento-borrar">Borrar</button>
                        </form>


                         <form action="{{route('artistas.edit', $artista->id)}}" method="GET">

                            @csrf
                            <button class="btn btn-warning">Editar</button>
                        </form>


                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class=" pagin d-flex justify-content-center">
    {{$artistas->links()}}
    </div>
@endsection



