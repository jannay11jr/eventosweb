<html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

            <title>@yield('titulo')</title>
            @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
    </head>
    <body>
        <div>
        @include('p_base/nav')
        </div>
        <div class="container mt-3 margin-top-navbar">
        @yield('contenido')
        <style>
            body{
             background-color: #393E41;
            color: #E7E5DF;
            }
        </style>
    </div>
    </body>
</html>
