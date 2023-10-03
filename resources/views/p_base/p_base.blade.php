<html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon.png">
            <title>@yield('titulo')</title>
            @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
    </head>
    <body>
        <div>
        @include('p_base/nav')
        </div>
        <div class="container mt-3 margin-top-navbar">
        @yield('contenido')
    </div>
    </body>
</html>
