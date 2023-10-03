@extends('p_base.p_base')
@section('titulo','Registrarse')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    Registro de usuario
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="registro_email" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="registro_password" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="registro_password2" placeholder="Confirmar contraseña">
                        </div>
                        <button type="submit" class="btn btn-dark">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
