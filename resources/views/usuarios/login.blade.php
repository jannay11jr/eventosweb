@extends('p_base.p_base')
@section('titulo','Login')

@section('contenido')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    Iniciar sesión
                </div>
                <div class="card-body">
                    @if (!empty($error))
                    <div class="text-danger">
                    {{ $error }}
                    </div>
                    @endif


                    <form action="{{route('login.login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="login_email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="login_password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
                        </div>
                        <button type="submit" class="btn btn-dark">Acceder</button>
                        <p><a href="{{route('registro')}}" style="text-decoration: none" >Registrate pinchando aquí </a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
