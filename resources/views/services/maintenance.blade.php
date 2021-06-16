@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')

    <div class="row">
        <div class="col-md-12 col-12 text-center mt-5">
            <h1 class="text-title">Local de Manutenção (descrição)</h1>
        </div>

        <div class="d-flex justify-content-center text-center">
            <div class="col-md-6 col-12">
                <form>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div style="position:relative;" class="p-1 w-100">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Escolher arquivo
                                        <input type="file" class="input-file" name="file_source" size="40"
                                            onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div style="position:relative;" class="p-1">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Escolher arquivo
                                        <input type="file" class="input-file" name="file_source" size="40"
                                            onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div style="position:relative;" class="p-1">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Escolher arquivo
                                        <input type="file" class="input-file" name="file_source" size="40"
                                            onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div style="position:relative;" class="p-1">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Escolher arquivo
                                        <input type="file" class="input-file" name="file_source" size="40"
                                            onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div style="position:relative;" class="p-1">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Escolher arquivo
                                        <input type="file" class="input-file" name="file_source" size="40"
                                            onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                        </div>

        

                        
                    </div>

                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-12 col-12">

                                            <textarea name="" id="" cols="60" rows="5" class="form-control"
                                                placeholder="Descreva o local de Manutenção"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <button class="btn btn-success">Enviar</button>
                                    </div>
                                </div>
    
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
