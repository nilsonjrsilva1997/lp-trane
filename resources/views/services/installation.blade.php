@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')
    <!-- O cliente solicita o técnico para orçamento, tem um campo onde ele pode
       escrever o local onde quer que seja instalados o equipamento e um campo que ele poderá
       enviar até 5 fotos. A partir dai clica no botão em chamar técnico e o sistema manda uma
       mensagem no app do técnico, porém esse técnico tem até um certo período de tempo para
       responder ou o sistema busca outro profissional.
       Caso o técnico aceite ele poderá iniciar uma conversa com o cliente e marcar horário para
       visita e ou orçamento para a instalação do equipamento trane, ao final da instalação o
       técnico ou sistema envia uma pesquisa de satisfação para o cliente onde ele responde 3 ou
       4 perguntas e avalia o profissional.
       Quando o profissional for avaliado e 
       
       viacep.com.br/ws/01001000/json/
       -->
    <div class="row">
        <div class="col-md-12 col-12 text-center mt-5">
            <h1 class="text-title">Local de instalação (descrição)</h1>
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

                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="60" rows="5" class="form-control"
                                        placeholder="Descreva o local de instalação"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <button class="btn btn-success">Enviar</button>
                            </div>
                        </div>


                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@stop
