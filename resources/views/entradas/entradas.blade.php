@extends('p_base.p_base')

@section('titulo', 'Venta de entradas')

@section('contenido')
    <div class="container">
        <h1>Compra de Entradas</h1>
        <div class="entradasForm">
            <form action="/create-checkout-session" method="POST" name="entradasForm2" id="entradasForm2">
                @csrf
                @foreach($eventos as $evento)
                    <p>
                        <label for="{{$evento->id}}">{{$evento->nombre}}</label>
                        <select class="form-select" name="entradas[{{$evento->id}}]" id="{{$evento->id}}">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </p>
                @endforeach

                <button type="submit" class="btn-compras">Comprar</button>
            </form>
            <div id="totalPrice"></div>
        </div>
    </div>
@endsection
