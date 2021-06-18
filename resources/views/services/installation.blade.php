@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <div style="position:relative;" class="p-3">
                <h1 class="text-title">Local de instalação</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div style="position:relative;" class="p-3">
                <textarea name="" id="" cols="60" rows="10" class="form-control"
                    placeholder="Descrição do local de instalação"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-12">
            <div style="position:relative;" class="p-3">
                <a class='btn btn-secondary w-100 h-75 d-flex justify-content-center align-items-center' href='javascript:;'>
                    <i class="fas fa-upload"></i>
                    <input type="file" class="input-file" name="file_source" size="40"
                        onchange='$("#upload-file-info").html($(this).val());'>
                </a>
                <span class='label label-info' id="upload-file-info"></span>
            </div>
        </div>

        <div class="col-md-6 col-12">
            <div style="position:relative;" class="p-3">
                <button class="btn btn-success w-100 h-75">Enviar</button>
            </div>
        </div>
    </div>
@stop
