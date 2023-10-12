<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{route('inicio')}}">EVENT-TICKET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('eventos.index')}}">Eventos</a>
            </li>
            @if (auth()->check() && auth()->user()->rol_id === 1)
            <li class="nav-item">
                <a class="nav-link" href="{{'nuevo_evento'}}">Nuevo Evento</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{'comprar_entradas'}}">Compra Entradas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'contacto'}}">Contacto</a>
            </li>
            @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" style="color:darkgoldenrod"> Bienvenid@ {{auth()->user()->nombre}}</a>
            </li>
            @endif

            @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" href={{route ('logout')}}> Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{'login'}}"> <i class="far  fa-user"></i> Acceder</a>
            </li>

            @endif
        </ul>
    </div>
</nav>


<!-- Agrega jQuery (necesario para Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- Agrega Popper.js (necesario para Bootstrap) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Agrega Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
