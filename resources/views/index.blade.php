@extends('layouts.layout')

@section('title', 'Titulo da página')

@section('sidebar')

@stop

@section('content')

    <div class="d-flex flex-fill flex-column min-vh-100">
        <div class="container d-flex flex-fill flex-column justify-content-center">

            <div class="row justify-content-center pt-3">
                <img src={{ url('storage/images/logo-trane-color.svg') }} alt="" class="img-fluid">
            </div>

            <div class="row justify-content-center mt-5">

                <div class="col-md-6 col-12">
                    <img src={{ url('storage/images/credenciamento1.jpg') }} alt=""
                        class="img-fluid img-accreditation full p-3 shadow-lg p-3 mb-5 bg-white rounded"
                        data-toggle="tooltip" data-placement="top" title="Credenciamento 1" role="button">
                </div>

                <div class="col-md-6 col-12">
                    <img src={{ url('storage/images/credenciamento2.jpg') }} alt=""
                        class="img-fluid img-accreditation full p-3 shadow-lg p-3 mb-5 bg-white rounded"
                        data-toggle="tooltip" data-placement="top" title="Credenciamento 2" role="button">
                </div>
            </div>
        </div>
        <div class="bar-logo d-flex justify-content-end w-100 h-12">
            <a href="https://www.trane.com/commercial/latin-america/br/pt.html" target="_blank">
                <img src={{ url('storage/images/logo-trane-without-color.svg') }} alt="" class="p-3" data-toggle="tooltip"
                    data-placement="top" title="Conheça a Trane" role="button">
            </a>
        </div>

        <div class="d-flex justify-content-center w-100 h-12 text-center">
            <div>
            <a href="https://www.trane.com/commercial/latin-america/br/pt.html" target="_blank">
                <img src={{ url('storage/images/logo-refriplay-color.png') }} alt="" class="p-3 w-75" data-toggle="tooltip"
                    data-placement="top" title="Conheça a Trane" role="button">
            </a>
        </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="modalWelcome">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-title">
                        Bem vindo!
                    </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Tincidunt nunc pulvinar 
                        sapien et ligula ullamcorper. Mattis nunc sed blandit libero volutpat. 
                        A diam maecenas sed enim ut sem. Ac tortor vitae purus faucibus 
                        ornare suspendisse sed nisi lacus. Diam sit amet nisl suscipit 
                        adipiscing bibendum. Diam sit amet nisl suscipit adipiscing bibendum est 
                        ultricies integer. Enim sed faucibus turpis in eu mi. Vel pharetra vel 
                        turpis nunc eget lorem dolor. Ornare arcu dui vivamus arcu felis bibendum 
                        ut tristique. Lobortis elementum nibh tellus molestie nunc non blandit. 
                        Pharetra vel turpis nunc eget lorem dolor. Nulla porttitor massa id neque 
                        aliquam vestibulum morbi blandit cursus. Porttitor lacus luctus accumsan tortor 
                        posuere ac. Tellus elementum sagittis vitae et.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-25" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#modalWelcome').modal('show');
    </script>
@stop
