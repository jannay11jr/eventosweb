@extends('p_base.p_base')

@section('titulo', 'Venta de entradas')

@section('contenido')
    <div class="container">
        <h1>Compra de Entradas</h1>
        <form id="entradasForm">
            <div class="form-group">
                <label for="maluEntradas">Malú (30€)</label>
                <input type="number" class="form-control" id="maluEntradas" min="0" value="0">
            </div>
            <div class="form-group">
                <label for="shakiraEntradas">Shakira (20€)</label>
                <input type="number" class="form-control" id="shakiraEntradas" min="0" value="0">
            </div>
            <div class="form-group">
                <label for="travisEntradas">Travis Scoot (40€)</label>
                <input type="number" class="form-control" id="travisEntradas" min="0" value="0">
            </div>
            <div class="form-group">
                <label for="mariaEntradas">Maria Becerra (44€)</label>
                <input type="number" class="form-control" id="mariaEntradas" min="0" value="0">
            </div>
            <button type="submit" class="btn btn-primary">Calcular Precio Total</button>
        </form>
        <div id="totalPrice"></div>
    </div>
@endsection
