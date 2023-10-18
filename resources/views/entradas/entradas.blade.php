@extends('p_base.p_base')

@section('titulo', 'Venta de entradas')

@section('contenido')
    <div class="container">
        <h1>Compra de Entradas</h1>
        <form id="entradasForm">
            @foreach($eventos as $evento)
            <div class="form-group">
                <label for="maluEntradas">{{$evento->nombre}}</label>
                <input type="number" class="form-control" id="input_entradas" min="0" value="0" max="8">
            </div>
            @endforeach
            <button type="submit" class="btn btn-dark">COMPRAR</button>
        </form>
        <div id="totalPrice"></div>
    </div>
@endsection
