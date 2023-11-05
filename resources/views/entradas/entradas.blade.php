@extends('p_base.p_base')

@section('titulo', 'Venta de entradas')

@section('contenido')
    <div class="container">
        <h1>Compra de Entradas</h1>
        <div class="entradasForm">
        <form id="entradasForm2">
            @foreach($eventos as $evento)
            <p><label for="">{{$evento->nombre}}</label>
            <select class="form-select" name="{{$evento->nombre}}" id="{{$evento->nombre}}"></p>
            <option value="{{$evento->nombre}}_compra_0">0</option>
            <option value="{{$evento->nombre}}_compra_1">1</option>
            <option value="{{$evento->nombre}}_compra_2">2</option>
            <option value="{{$evento->nombre}}_compra_3">3</option>
            <option value="{{$evento->nombre}}_compra_4">4</option>
        </select>
            @endforeach

           <p> <button type="submit" class="btn btn-dark" @if (!"{{$evento->nombre}}_compra_0") disabled
            @endif>COMPRAR</button> </p>
        </form>
        <div id="totalPrice"></div>
    </div>
</div>
@endsection
