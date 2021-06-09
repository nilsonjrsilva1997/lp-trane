<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href={{ asset('css/app.css') }}>
        <script src={{ asset('js/app.js') }}></script>
    </head>
    <body>
        @section('sidebar')

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>