@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Instalação/manutenção</th>
                <th scope="col">descrição</th>
                <th scope="col">CEP</th>
                <th scope="col">Técnico</th>
                <th scope="col">Fotos</th>
            </tr>
        </thead>
        <tbody id="table_adm">
           
        </tbody>
    </table>

    <script>
        $(document).ready(function() {

            $.ajax({
                url: '/api/maintenance_installation/',
                method: 'GET',
                async: false,
                success: function(data) {
                    var html = '';


                    for(let i = 0; i < data.length; i++) {
                        
                    console.log(data[i]);
                        html += `
                        <tr>
                            <td>${data[i].id}</td>
                            <td>${data[i].type}</td>
                            <td>${data[i].description}</td>
                            <td>${data[i].zip_code}</td>
                            <td>${data[i].technician.usu_name}</td>
                        <tr>`
                    }
        
                    $('#table_adm').html(html);
                }
            });

        });
    </script>
@stop
