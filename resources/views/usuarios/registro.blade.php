@extends('p_base.p_base')
@section('titulo','Registrarse')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container mt-5">
                @if(Session::has('registro_exitoso'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('registro_exitoso') }}
                    </div>
                @endif
            <div class="card">
                <div class="card-header cabecera-cards" style="text-align: center">
                    Registro de usuario
                </div>
                <div class="card-body registro-form">
                    <form action="{{route('registro.store')}}" method="POST" class="">
                        @csrf
                        <div class="form-group">
                            <label for="registro_nombre">Nombre</label>
                            <input type="text" class="form-control" id="registro_nombre" name="registro_nombre" placeholder="Ingrese su nombre"  value="{{ old('registro_nombre') }}">
                            @if ($errors->has('registro_nombre'))
                            <div class="text-danger"> {{ $errors->first('registro_nombre') }} </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="registro_dni">DNI</label>
                                <input type="text" class="form-control" id="registro_dni" name="registro_dni"placeholder="Ingrese su DNI"  value="{{ old('registro_dni') }}">
                                @if ($errors->has('registro_dni'))
                            <div class="text-danger"> {{ $errors->first('registro_dni') }} </div>
                            @endif
                            </div>


                            <div class="form-group">
                            <label for="registro_email">Correo electrónico</label>
                            <input type="email" class="form-control" id="registro_email"name="registro_email" placeholder="Ingrese su correo electrónico"  value="{{ old('registro_email') }}">
                            @if ($errors->has('registro_email'))
                            <div class="text-danger"> {{ $errors->first('registro_email') }} </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="registro_password">Contraseña</label>
                            <input type="password" class="form-control" id="registro_password" name="registro_password" placeholder="Ingrese su contraseña">
                            @if ($errors->has('registro_password'))
                            <div class="text-danger"> {{ $errors->first('registro_password') }} </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="registro_password2">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="registro_password2" name="registro_password2" placeholder="Confirmar contraseña">
                            @if ($errors->has('registro_password2'))
                            <div class="text-danger"> {{ $errors->first('registro_password2') }} </div>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-dark">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
