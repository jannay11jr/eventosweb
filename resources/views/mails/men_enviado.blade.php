@extends('p_base.p_base')
@section('titulo','Mensaje enviado')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body text-center">
            <h1>Su mensaje ha sido enviado correctamente.</h1>
            <i class="fa-solid fa-check fas" style="color: #2d9f31;"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
