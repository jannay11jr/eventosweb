<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo electrónico nuevo</title>
</head>
<body>
    <p>Nuevo mensaje de {{$data['nombre']}} con email {{$data['email']}}</p>
    <p>Aquí están los datos: </p><br>
    <p><strong>Nombre: </strong> {{$data['nombre']}}</p>
    <p><strong>Teléfono: </strong> {{$data['telefono']}}</p>
    <p><strong>Email: </strong> {{$data['email']}}</p>

    <p><strong>Asunto: </strong> {{$data['asunto']}}</p>
    <p><strong>Mensaje: </strong> {{$data['mensaje']}}</p>


</body>
</html>
