@extends('p_base.p_base')

@section('titulo', 'Detalles de evento')

@section('contenido')

<div class="container mt-5 ">
    <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen de evento">
        <div class="card-body">
            <h5 class="card-title">{{$evento->name}}</h5>
            <p class="card-text">Descripción del evento. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure amet natus, omnis corporis hic cum illo aperiam voluptatibus quia, doloremque dignissimos veritatis, ipsum illum velit at dolores ipsa nobis vitae?.</p>
            <p class="card-text"><strong>Localización:</strong> {{$evento->localizacion}}</p>
            <p class="card-text"><strong>Género:</strong> {{$evento->genero}}</p>
            <p class="card-text"><strong>Asistencia media:</strong> 1000 personas</p>
            <h2 style="text-align: center">Algunos artistas que actuaron:</h2>
            <div class="row">
                <div class="col">
                    <img src="https://via.placeholder.com/80" class="img-fluid rounded-circle" alt="Persona 1">
                </div>
                <div class="col">
                    <img src="https://via.placeholder.com/80" class="img-fluid rounded-circle" alt="Persona 2">
                </div>
                <div class="col">
                    <img src="https://via.placeholder.com/80" class="img-fluid rounded-circle" alt="Persona 3">
                </div>
                <div class="col">
                    <img src="https://via.placeholder.com/80" class="img-fluid rounded-circle" alt="Persona 4">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
