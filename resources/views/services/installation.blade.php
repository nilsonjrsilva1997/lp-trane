@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="p-3">
                <h1 class="text-title text-center">Local de Instalação</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="p-3">
                <textarea name="" id="txaDescription" cols="60" rows="10" class="form-control"
                    placeholder="Descrição do local de Instalação"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 col-12">
            <h3 class="text-center">Imagens do local</h3>

            <div class="area-upload">
                <label for="upload-file" class="label-upload">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <div class="texto">Clique ou arraste o arquivo</div>
                </label>
                <input type="file" accept="image/jpg,image/png" id="upload-file" multiple />

                <div class="lista-uploads"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="d-flex justify-content-end mb-5 w-100">
                <button class="btn btn-success w-100 h-75" id="btn_submit">Enviar</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            let drop_ = document.querySelector('.area-upload #upload-file');
            drop_.addEventListener('dragenter', function() {
                document.querySelector('.area-upload .label-upload').classList.add('highlight');
            });
            drop_.addEventListener('dragleave', function() {
                document.querySelector('.area-upload .label-upload').classList.remove('highlight');
            });
            drop_.addEventListener('drop', function() {
                document.querySelector('.area-upload .label-upload').classList.remove('highlight');
            });
        });
    </script>

    <script>
        $(document).on('click', '#btn_submit', function() {
            var txaDescription = $('#txaDescription').val();
            var files = $('#upload-file')[0].files;

            if (txaDescription == "") {
                alert('O campo descrição é obrigatório');
                return;
            }

            if (files.length == 0) {
                alert('As fotos do local são obrigatórias');
                return;
            }

            $('#btn_submit').prop('disabled', 'true');

            var data = {
                'description': txaDescription,
                'type': 'installation',
                'usu_id': localStorage.getItem("usu_id"),
                'zip_code': localStorage.getItem("zip_code")
            };

            saveData(data, files);
        });
    </script>

    <script>
        async function saveData(data, dataFile) {
            var mainInstall = await Promise.resolve($.post('/api/maintenance_installation/create', data));

            for (let i = 0; i < dataFile.length; i++) {
                var formData = new FormData();
                formData.append('file', document.getElementById('upload-file').files[i]);

                var images = await Promise.resolve($.ajax({
                    url: '/api/image/create',
                    method: 'POST',
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(data) {

                    }
                }));

                var dataPivot = {
                    image_id: images.id,
                    maintenance_installation_id: mainInstall.id
                };

                var pivotMainInstall = await Promise.resolve($.post('/api/image_install/create', dataPivot));

                if(i == (dataFile.length - 1)) {
                    alert('Dados salvos com sucesso');
                }
            }
        }
    </script>
@stop
