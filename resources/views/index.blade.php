@extends('layouts.layout')

@section('title', 'Titulo da página')

@section('sidebar')

@stop

@section('content')

    <div class="row justify-content-center mt-5">

        <div class="col-md-6 col-12">
            <a href={{ url('/credenciamentos') }}>
                <img src={{ url('storage/images/credenciamento1.png') }} alt=""
                    class="img-fluid img-accreditation full p-3 shadow-lg p-3 mb-5 bg-white rounded" data-toggle="tooltip"
                    data-placement="top" title="Credenciamento 1" role="button">
            </a>
        </div>

        <div class="col-md-6 col-12">
            <a href={{ url('/credenciamentos') }}>
                <img src={{ url('storage/images/credenciamento2.png') }} alt=""
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
                        Obrigado (a) por escolher nossa marca!.​
                    </p>
                        
                    <p>​
                        Para nós da Trane, estar presente em todos os momentos da sua experiencia com nosso produto é fundamental, é o que nos move dia a dia para nos tornarmos uma marca mais presente nas residências das famílias brasileiras e também nas obras que impulsionam nosso país ao crescimento e desenvolvimento.​
                    </p>

                    <p>
                        Criamos este canal de comunicação para que você tenha a comodidade de agendar suas visitas técnicas de forma rápida, eficaz e com toda seriedade que nossos clientes precisam e merecem.​
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
