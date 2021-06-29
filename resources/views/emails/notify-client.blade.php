@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')
    <h3>Obrigado por escolher a nossa empresa</h3>
    <p>Poderia nos ajudar a melhorar o nosso atendimento?</p>
    <p>Acesse o link abaixo e responda a nossa pesquisa de satisfação :)</p>
    <a href="{{ url('/pesquisa_satisfacao') }}">{{ url('/pesquisa_satisfacao') }}</a>
    <p>Att,</p>
    <p>Equipe RefriCode</p>
@stop