@extends('p_base.p_base')

@section('titulo', 'Inicio')



@section('contenido')
    <h1 style="text-shadow: 2px 2px 4px #E7BB41">BIENVENIDO A LA PÁGINA DE EVENT-TICKET</h1>
    <p style="text-align: center">Noticias, entradas y mucha diversión.</p>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
    <article>
        <h2 class="titulo2">Hardwell vuelve tras tres años de ausencia</h2>
        <p>Robbert van de Corput, más conocido como Hardwell, es un DJ, productor discográfico y remixer neerlandés, todos sabemos que decidió darse un tiempo de forma temporal, hablamos de septiembre de 2018 cuando decidió dar la noticia, la vida de DJ es muy dura y con mucho estrés pero todo indica a que se ha recuperado y que volverá más fuerte que nunca.</p>
        <p>Su padre le enseñó a utilizar el piano. A los 10 años de edad descubrió su pasión por la música, y con solo 12 años comenzó su carrera como DJ realizando presentaciones en distintos clubes de los Países Bajos, logrando ganar un buen reconocimiento en su país por sus innovadoras mezclas. A los 16 años ya había 4 discos a su nombre. Actualmente es reconocido mundialmente por la industria de la música electrónica, es considerado uno de los mejores DJs del mundo.</p>
        <img src="{{ asset('img/hardwell2.jpg') }}" alt="Hardwell" class="hardwell" style="margin-bottom: 3%">

    </article>
        </div>

        <div class="col-12 col-md-12 col-lg-6">
    <article>
        <h2 class="titulo2">Medusa celebrará su décimo aniversario</h2>
        <p>Uno de los mayores festivales de música electrónica del mundo y el mayor a nivel nacional cumplirá su décimo aniversario el próximo verano, Medusa Festival buscará reinventarse y hacer que el publico celebre los diez años del festival a lo grande y como más le gusta a la organización, bailando eléctronica.</p>
        <p>Las fechas ya han sido anunciadas se celebrará del 7 al 12 de agosto de 2024, la temática también ha sido revelada, esta vez se hará sobre "Egipto". Se espera uno de los carteles más gordos hasta la fecha, aún no ha sido ningún artista anunciado pero recordamos algunos de los djs que han pasado, djs de la talla de Amelie Lens, David Guetta o Steve Aoki si hablamos del plano internacional, si hablamos de nacional Wade, Danny Avila o Oscar Mulero.</p>
        <img class="medusa" src="{{ asset('img/medusa.jpg') }}" alt="Medusa Festival">

    </article>

        </div>
    </div>


     <div class="frases">
        <h1>¡Compra tus entradas para los mejores festivales!</h1>
        <p>¡No te pierdas los eventos musicales más emocionantes del año! Compra tus entradas ahora y asegura tu lugar en los festivales más populares.</p>

        <a class="btn btn-frases" style="text-align:center" href="{{('comprar_entradas')}}">Comprar Entradas</a>
    </div>


    <hr class="separador my-4">



    <h3 class="titulo2">Artistas TOP ⭐️ de los que eventualmente vendemos tickets</h3>

    <div class="container mt-4">

        <div class="imgs-inicio">
        <div class="row">
          <div class="col-md-4 mb-4">
            <a href="https://open.spotify.com/search/justin%20bieber"  target="_blank" rel="noopener noreferrer" class="enlaces_artistas"><img src="img/justin_bieber.jpg" class="img-inicio" alt="Justin Bieber">
           </a>
          </div>
          <div class="col-md-4 mb-4">
            <a href="https://open.spotify.com/search/acdc"  target="_blank" rel="noopener noreferrer" class="enlaces_artistas"><img src="img/acdc.jpg" class="img-inicio" alt="ACDC"></a>
          </div>
          <div class="col-md-4 mb-4">
            <a href="https://open.spotify.com/search/paulo%20londra"  target="_blank" rel="noopener noreferrer" class="enlaces_artistas"><img src="img/paulo_londra.jpg" class="img-inicio" alt="Paulo Londra"></a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-4">
            <a href="https://open.spotify.com/search/daddy%20yankee"  target="_blank" rel="noopener noreferrer" class="enlaces_artistas"><img src="img/daddy_yankee.jpg" class="img-inicio" alt="Daddy Yankee"></a>
          </div>
          <div class="col-md-4 mb-4">
            <a href="https://open.spotify.com/search/imagine%20dragons"  target="_blank" rel="noopener noreferrer" class="enlaces_artistas"><img src="img/imagine_dragons.jpg" class="img-inicio" alt="Imagine Dragons"></a>
          </div>
          <div class="col-md-4 mb-4">
            <a href="https://open.spotify.com/search/melendi"  target="_blank" rel="noopener noreferrer" class="enlaces_artistas"><img src="img/melendi1.jpg" class="img-inicio" alt="Melendi"></a>
        </div>
          </div>
        </div>
      </div>


<hr class="separador my-4">

<div class="row">
    <h3 class="center titulo2">Aftermovies más recientes de conciertos y festivales que colaboran con Event-Ticket</h3>
    <div class="col-12 col-md-6 col-lg-6 video_yt">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/CbRoIUjeNM8?si=fIB-2PPqycO7sDwy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe alt="Video del Medusa">
    </div>
    <div class="col-12 col-md-6 col-lg-6 video_yt">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/izYDADBHhmk?si=ieukt357nBlGjPY3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe alt="Video del Boombastic">
    </div>
</div>

<h3 class="center titulo2 mt-3 mb-3">PATROCINADORES/SPONSORS</h3>

<div class="row sponsors">

    <div class="col-4 col-md-4 col-lg-4">
    <img class="im_partners" src="img/cola.png" alt="Coca Cola">
    </div>
    <div class="col-4 col-md-4 col-lg-4">
    <img class="im_partners" src="img/fagor.png" alt="Fagor">
    </div>
    <div class="col-4 col-md-4 col-lg-4">
    <img class="im_partners" src="img/sony.png" alt="Sony">
    </div>

</div>

@endsection


