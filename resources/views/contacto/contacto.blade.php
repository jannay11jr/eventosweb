@extends('p_base.p_base')
@section('titulo','Contacto')

@section('contenido')

<h3 class="evento-body" style="margin-top: 100px">En esta página podrás enviarnos cualquier duda, pregunta o sugerencia sobre la compra de entradas.</h3>

<div class="container mt-4">
    <div class="card">
        <div class="card-header cabecera-cards">
            <h1 class="card-title">Contacto</h1>
        </div>
        <div class="card-body card_contacto">

            <form action="{{ route('contacto.store') }}" method="POST" class="f_contacto">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <div class="text-danger"> {{ $errors->first('nombre') }} </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}">
                            @if ($errors->has('telefono'))
                                <div class="text-danger"> {{ $errors->first('telefono') }} </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="text-danger"> {{ $errors->first('email') }} </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="text" id="asunto" name="asunto" class="form-control" value="{{ old('asunto') }}">
                            @if ($errors->has('asunto'))
                                <div class="text-danger"> {{ $errors->first('asunto') }} </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" class="form-control" style="width: 100%; height: 120px;">{{ old('mensaje') }}</textarea>
                    @if ($errors->has('mensaje'))
                        <div class="text-danger"> {{ $errors->first('mensaje') }} </div>
                    @endif
                </div>

                <button class="btn btn-dark btn_form" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection
