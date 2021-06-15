@extends('layouts.layout')

@section('title', 'Titulo da página')

@section('sidebar')

@stop

@section('content')

    <div class="row justify-content-center mt-5">

        <div class="col-md-6 col-12">
            <a href={{ url('/credenciamentos') }}>
                <img src={{ url('storage/images/credenciamento1.jpg') }} alt=""
                    class="img-fluid img-accreditation full p-3 shadow-lg p-3 mb-5 bg-white rounded" data-toggle="tooltip"
                    data-placement="top" title="Credenciamento 1" role="button">
            </a>
        </div>

        <div class="col-md-6 col-12">
            <a href={{ url('/credenciamentos') }}>
                <img src={{ url('storage/images/credenciamento2.jpg') }} alt=""
                    class="img-fluid img-accreditation full p-3 shadow-lg p-3 mb-5 bg-white rounded" data-toggle="tooltip"
                    data-placement="top" title="Credenciamento 2" role="button">
            </a>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="modalWelcome">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <img src={{ url('storage/images/logo-trane-color.svg') }} alt=""
                            class="img-fluid img-modal-header">
                    </div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title text-title text-center">
                        Bem Vindo!
                    </h1>

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
