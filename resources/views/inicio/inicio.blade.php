@extends('p_base.p_base')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Bienvenido a la página de Event-ticket</h1>
    <p>En esta página encontrarás todo lo relacionado con noticias y entrevistas, acerca de los últimos eventos músicales</p>

    <div class="flex-container">
        <div class="flex-item">
    <article>
        <h2>Hardwell vuelve a los escenarios</h2>
        <p>Robbert van de Corput, más conocido como Hardwell, es un DJ, productor discográfico y remixer neerlandés, todos sabemos que decidió darse un tiempo de forma temporal, hablamos de septiembre de 2018 cuando decidió dar la noticia, la vida de DJ es muy dura y con mucho estrés pero todo indica a que se ha recuperado y que volverá más fuerte que nunca.</p>
        <img src="{{ asset('img/hardwell2.jpg') }}" alt="Hardwell" class="hardwell">

    </article>
        </div>

        <div class="flex-item">
    <article>
        <h2>Medusa celebrará el próximo verano su décimo aniversario</h2>
        <p>Uno de los mayores festivales de música electrónica del mundo y el mayor a nivel nacional cumplirá su décimo aniversario el próximo verano, Medusa Festival buscará reinventarse y hacer que el publico celebre los diez años del festival a lo grande y como más le gusta a la organización, bailando eléctronica.</p>
        <p>Las fechas ya han sido anunciadas se celebrará del 7 al 12 de agosto de 2024, la temática también ha sido revelada, esta vez se hará sobre "Egipto". Se espera uno de los carteles más gordos hasta la fecha, aún no ha sido ningún artista anunciado pero recordamos algunos de los djs que han pasado, djs de la talla de Amelie Lens, David Guetta o Steve Aoki si hablamos del plano internacional, si hablamos de nacional Wade, Danny Avila o Oscar Mulero.</p>
        <img class="medusa" src="{{ asset('img/medusa.jpg') }}" alt="Medusa Festival">

    </article>

        </div>
    </div>

    <h3>Recuerda que para la compra de cualquier entrada en esta página web debes de estar registrado, ¿a que esperas?</h3>
    <button style="align-content: center" class="btn btn-primary btn-registro"> Registrate aquí </button>

    <hr class="separador my-4">



    <h3 class="center">Algunos artistas de los que eventualmente vendemos tickets</h3>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/imagine_dragons.jpg" class="d-block w-100" alt="Foto de Imagine Dragons">
          <div class="carousel-caption  d-md-block">
            <h5>Imagine Dragons</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/shakira.jpg" class="d-block w-100" alt="Foto de Shakira">
          <div class="carousel-caption d-none d-md-block">
            <h5>Shakira</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/justin_bieber.jpg" class="d-block w-100" alt="Foto de Justin">
          <div class="carousel-caption d-none d-md-block">
            <h5>Justin Bieber</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/melendi.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Melendi</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/paulo_londra.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Paulo Londra</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<hr class="separador my-4">

<h3>PATROCINADORES/SPONSORS</h3>

<div class="partners">

    <img class="im_partners" src="img/cola.png" alt="">

    <img class="im_partners" src="img/fagor.png" alt="">

    <img class="im_partners" src="img/acer.png" alt="">

</div>


@endsection
