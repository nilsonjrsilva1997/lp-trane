<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <script src={{ asset('js/app.js') }}></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
    @section('sidebar')

    @show
    <div class="d-flex flex-fill flex-column min-vh-100">
        <div class="container d-flex flex-fill flex-column justify-content-center">
            <div class="row justify-content-center align-items-center py-5">
                <img src={{ url('storage/images/logo-refriplay-color.png') }} data-toggle="tooltip"
                    data-placement="top" title="Conheça a Trane" role="button" style="
    max-width: 230px;
    margin-right: 40px;
"><img src={{ url('storage/images/logo-trane-color.svg') }} alt="" class="img-fluid">
            </div>
            @yield('content')

        </div>

        <div class="d-flex justify-content-center w-100 h-12 text-center">
            <div class="bar-logo d-flex justify-content-end w-100 py-2">
                <a href="https://www.trane.com/commercial/latin-america/br/pt.html" target="_blank">
                    <img src={{ url('storage/images/logo-trane-without-color.svg') }} alt="" class="px-3"
                        data-toggle="tooltip" data-placement="top" title="Conheça a Trane" role="button" style="
        max-width: 160px;
    ">
                </a>
            </div>
        </div>
    </div>
</body>

</html>
