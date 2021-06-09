@extends('layouts.layout')

@section('title', 'Titulo da página')

@section('sidebar')

@stop



@section('content')

    <div class="modal" tabindex="-1" role="dialog" id="modalWelcome">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bem vindo!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Ao abrir a landing Page tem uma mensagem de boas vindas a
                        página de credenciados da Trane com um texto explicando um pouco sobre a página.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#modalWelcome').modal('show');

    </script>
@stop
