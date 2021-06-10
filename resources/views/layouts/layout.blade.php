<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body>
    @section('sidebar')

    @show
    <script src={{ asset('js/app.js') }}></script>
    @yield('content')    
</body>

</html>
