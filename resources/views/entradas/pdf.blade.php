<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ public_path('favicon/favicon.png') }}" type="image/x-icon">
    <title>Tu entrada de Event Ticket</title>
    @vite(['resources/sass/pdf.scss', 'resources/js/bootstrap.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="event-info">
                    <img class="m"src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('http://eventos.laravel/eventos')) !!} ">

                    <p><strong>Nombre: </strong>{{auth()->user()->nombre}}</p>
                    <p><strong>Email: </strong>{{auth()->user()->email}}</p>
                    <p><strong>DNI: </strong>{{auth()->user()->dni}}</p>
                    @foreach ($compras as $compra)
                    <p><strong> Evento: </strong>{{$compra['evento']}}</p>
                    <p> <strong>Cantidad: </strong>{{$compra['cantidad']}} </p>
                    <p> <strong>Total:</strong>{{$compra['total']}} € </p>
                    @endforeach

                </div>


            </div>
        </div>




    <p class="titulo_condiciones"> <strong>Condiciones generales de la entrada: </strong></p>
    <div class="condiciones">
    <p>1. Queda prohibido introducir alcohol, sustancias ilegales, armas u objetos peligrosos al evento.</p>
    <p>2. Admisión, en virtud de lo dispuesto en la Ley de Espectáculos Públicos vigente.</p>
    <p>3. Queda prohibida la entrada a menores de 16 años. Es importante para todos los asistentes llevar consigo el DNI u otro documento identificativo válido original. Los menores de edad tendrán que llevar permiso paterno, acompañado
    de una fotocopia del DNI de su padre/madre. El acceso a la ACAMPADA es exclusivo para mayores de 18 años.</p>
    <p>4. Queda limitada la entrada y/o permanencia en el evento a toda persona que: Se encuentre en estado de embriaguez, porte o consuma cualquier tipo de estupefacientes o cualquier tipo de sustancia ilegal; Porte armas u objetos contundentes, cortantes o potencialmente peligrosos, susceptible de causar daño a personas y/u objetos; Provoque o incite cualquier desorden dentro del evento o haya causado alborotos comprobados.</p>
    <p>5. Todo asistente podrá ser sometido a un registro por el equipo seguridad en el acceso al evento, siguiendo las directrices de Ley de Espectáculos Públicos y Seguridad Privada. En caso de negarse al registro, le será denegada la
    entrada al evento.</p>
    <p>6. Cualquier entrada rota o con indicios de falsificación autorizará al organizador a privar a su portador del acceso al evento. La organización del evento no se hace responsable de las entradas robadas o compradas en puntos de venta
    no autorizados, tales como webs de reventa de entradas, etc.</p>
    <p>7. Está terminantemente prohibido grabar, retransmitir y/o filmar el evento con equipo profesional sin permiso previo de la organización. La organización podrá grabar, retransmitir y filmar a los asistentes.</p>
    <p>8. No está permitida la devolución de entradas adquiridas online.</p>
    <p>9. El abono incluye el primer acceso de cada día. La organización cobrará un cuño de reacceso por los siguientes accesos de cada día.</p>
    <p>10. La entrada constituye una licencia única y exclusivamente al titular indicado en la misma. Obligatorio asistir con DNI original o pasaporte.</p>
    <p>11. El cambio de la titularidad de la entrada se podrá realizar en los plazos establecidos por la organización, asumiendo el nuevo titular el coste establecido por la organización en cada momento.</p>
    </div>

    <div class="container_patrocinadores">
    <p class="titulo_patrocinadores"> <strong>Patrocinadores oficiales:</strong></p>
    <div class="patrocinadores row">
        <img src="./img/cola.png" >
        <img src="./img/fagor.png">
        <img src="./img/sony.png" >
    </div>
    </div>

    <div class="empresa_creadora">
        <strong>Empresa promotora: Event-Ticket</strong>
        <p>P19902272</p>
        <p>Benidorm (Alicante)</p>
    </div>

</body>
</html>
