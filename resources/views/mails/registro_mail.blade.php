<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Event-Ticket</title>
</head>
<body>
    <p>Hola {{$registro['registro_nombre']}}, bienvenido a Event-Ticket la plataforma número uno en la venta de entradas de festivales y conciertos a nivel nacional.</p><br>

    <p>Tu registro se ha completado con éxito, por favor revisa los datos que nos has proporcionado y guarda bien este email por si en algún momento olvidas tu email o contraseña con el que te has creado la cuenta.</p><br>

    <p><strong>Email:</strong> {{$registro['registro_email']}}</p>
    <p><strong>Contraseña: </strong>{{$registro['registro_password']}}</p>
</body>
</html>
