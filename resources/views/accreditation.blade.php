@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row mb-5">
            <div class="col-md-7 col-12 d-flex justify-content-center">
                <section id="sectionMap" class="">
                    <embed id="E" src={{ url('storage/images/map.svg') }} type="image/svg+xml">
                    <p id="nome_estado"></p>
                    <p id="capital_estado"></p>
                </section>
            </div>
            <div class="col-md-5 col-12 justify-content-center">
                <h1 class="text-title">Encontre um credenciado no seu estado</h1>
                <form class="mt-3" id="formZipCode">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="zip_code" name="zip_code" class="form-control cep" placeholder="CEP"
                            maxlength="9">

                        <div class="error-message-zipcode"></div>
                    </div>
                    <div class="form-group">
                        <input type="number" name="radius" id="radius" class="form-control" placeholder="Raio">
                        <div class="error-message-radius"></div>

                    </div>

                    {{-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkLocation">
                        <label class="form-check-label" for="checkLocation">
                            Usar minha localização
                        </label>
                    </div> --}}
                    
                    <div class="pt-3">
                        <button id="btnSearchTechnician" class="btn btn-primary btn-block">Procurar</button>
                    </div>
                </form>
            </div>
        </div>

        <a href="#" id="tecnicos"></a>

        <div class="row results" id="messageResults">

        </div>

        <div class="row" id="containerTechnician"></div>

        <div class="modal" tabindex="-1" role="dialog" id="serviceOptions">
            <div class="modal-dialog modal-dialog-message modal-lg" role="document">
                <div class="modal-content modal-message modal-content-message">
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
                        <div id="user_data"></div>
                        <h1 class="modal-title text-title text-center">
                            Atividades
                        </h1>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card w-100">

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 col-12">
                                    <p>
                                        <a href={{ url('/atividades/instalacao') }} target="_blank"><button
                                                class="btn btn-secondary">Instalação</button></a>
                                    </p>
                                    <p>
                                        Clique aqui para agendar sua visita de Instalação
                                    </p>
                                </div>
                                <div class="col-md-4 col-12">
                                    <p>
                                        <a href={{ url('/atividades/manutencao') }} target="_blank"><button
                                                class="btn btn-secondary">Manutenção</button></a>
                                    </p>
                                    <p>
                                        Clique aqui para agendar sua visita de Manutenção
                                    </p>
                                </div>
                                <div class="col-md-4 col-12">
                                    <p>
                                        <a href="https://www.refricode.com.br/garantia/trane" target="_blank"><button
                                                class="btn btn-secondary">Garantia Trane</button></a>
                                    </p>
                                    <p>
                                        Clique aqui para agendar sua visita de Garantia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-25" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.img-open-modal', function() {
            localStorage.setItem("usu_id", $(this)[0].id);
            $('#serviceOptions').modal('show');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.cep').mask('00000-000')
        });
    </script>

    <script>
        async function init() {
            var objEstado = await Promise.resolve($.get('/api/technician/numbers/'));
            var msg = document.getElementById('msg');
            var D = document.getElementById('E');
            SVGDoc = D.getSVGDocument();
            SVGRoot = SVGDoc.documentElement;
            svgns = 'http://www.w3.org/2000/svg';
            var estados = SVGRoot.getElementsByTagName('path');
            var qdeEstados = estados.length;

            for (i = 0; i < qdeEstados; i++) {
                console.log(objEstado[i]);
            }

            for (i = 0; i < qdeEstados; i++) {
                estados[i].onmouseover = function(evt) {
                    var x = evt.pageX;
                    var y = evt.pageY + 250;
                    this.style.fill = '#FF2B00';
                    var siglaEstado = this.parentNode.id;

                    $('#nome_estado').html('<h1 class="text-title">' + objEstado[siglaEstado][0].state + "</h1>")
                        .css({});
                    $('#capital_estado').html('<h1 class="text-title">Número de técnicos: ' + objEstado[siglaEstado]
                            [0].number_technician + "</h1>")
                        .css({});
                }
                estados[i].onmouseout = function() {
                    var fillColor = this.getAttribute('fill');
                    this.style.fill = fillColor;
                    $('#nome_estado').html('').css({
                        border: 'none',
                    });
                    $('#capital_estado').html('').css({
                        border: 'none',
                    });
                }
            }
        }
        window.addEventListener("load", init, false);
    </script>

    <script>
        $('#btnSearchTechnician').click(function(e) {
            e.preventDefault();

            // if ($('#checkLocation')[0].checked) {
            //     if ('geolocation' in navigator) {
            //         navigator.geolocation.getCurrentPosition(function(position) {
            //             var radius = $('#radius');
            //             var errorMessage = $('.error-message-radius');

            //             if (radius.val() == "") {
            //                 radius.addClass('is-invalid');
            //                 errorMessage.html(`<p class="help-danger">O campo raio é obrigatório</p>`);
            //                 return;
            //             } else {
            //                 radius.removeClass('is-invalid');
            //                 errorMessage.html(`<p class=""></p>`);
            //             }

            //             var latitude = position.coords.latitude;
            //             var longitude = position.coords.longitude;

            //             var data = {
            //                 'latitude': position.coords.latitude,
            //                 'longitude': position.coords.longitude,
            //                 'radius': 10,
            //                 'cep_ou_local': 'LOCAL'
            //             };

            //             $.ajax({
            //                 url: '/api/technician/search/by_location',
            //                 method: 'POST',
            //                 data: data,
            //                 success: function(data) {
            //                     if (data.length == 0) {
            //                         $('.text-results')[0].innerText =
            //                             'Nenhum técnico encontrado';
            //                     }

            //                     window.location.href = '#tecnicos';
            //                 }
            //             });

            //         }, function(error) {
            //             console.log('Erro ao encontrar a posição');
            //         });
            //     } else {
            //         alert('Não foi possível pegar a localização');
            //     }
            //     let $cep = $('#zip_code').val();

            //     console.log('cep: ' + $cep);
            // } else {
                var radius = $('#radius');
                var zipCode = $('#zip_code');
                var errorMessage = $('.error-message-radius');
                var errorMessageZipCode = $('.error-message-zipcode');

                if (radius.val() == "") {
                    radius.addClass('is-invalid');
                    errorMessage.html(`<p class="help-danger">O campo raio é obrigatório</p>`);
                } else {
                    radius.removeClass('is-invalid');
                    errorMessage.html(`<p class=""></p>`);
                }

                if (zipCode.val() == "") {
                    zipCode.addClass('is-invalid');
                    errorMessageZipCode.html(`<p class="help-danger">O campo raio é obrigatório</p>`);

                } else {
                    zipCode.removeClass('is-invalid');
                    errorMessageZipCode.html(`<p class=""></p>`);
                }

                if (zipCode.val() != "" && radius != "") {
                    var dataUsu = {
                        'zip_code': zipCode.val(),
                        'radius': radius.val(),
                        'cep_ou_local': 'CEP'
                    };

                    localStorage.setItem("zip_code", zipCode.val());

                    $.ajax({
                        url: '/api/technician/search/by_location',
                        method: 'POST',
                        data: dataUsu,
                        success: function(data) {
                            var htmlCards = '';

                            $('#messageResults').html(`
                                                <div class="col-md-12 col-12 text-left">
                                                    <p class="text-left text-results-1">Resultados para CEP ${$('#zip_code').val()} em um raio de ${$('#radius').val()}km</p>
                                                    <h1 class="text-title text-left text-results">Encontramos ${data.length} técnicos na sua região</h1>
                                                </div>
                                            `);

                            for (let i = 0; i < data.length; i++) {
                                var srcImage = '';
                                var phone = '';
                                var phoneLink = '';

                                if (data[i].usu_logo === null) {
                                    srcImage =
                                        `https://scontent-gru2-1.xx.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-3&_nc_sid=7206a8&_nc_eui2=AeEZyILZuVe3bjGi75E2bwrzso2H55p0AlGyjYfnmnQCUfPvdVtza2vJZsaEqlJcJV6yvbp2x6F3qvKy42Kooc5V&_nc_ohc=fVddfNcjRZkAX_9WWWE&_nc_ht=scontent-gru2-1.xx&oh=0ff524be16a82edb60ade21ec53e1cdd&oe=60DA1B38`;
                                } else {
                                    srcImage = `/images/${data[i].usu_logo}`;
                                }


                                if (data[i].usu_phone == null) {
                                    phoneLink = '#';
                                } else {
                                    phone = data[i].usu_phone.replace('(', "").replace(')', '').replace(
                                        '-', '');
                                    phoneLink =
                                        `https://api.whatsapp.com/send?phone=55${phone}&text=Olá%20${data[i].usu_name},%20te%20vi%20na%20pagina%20da%20Trane,%20gostaria%20de%20um%20orçamento.`;
                                }

                                htmlCards += `<div class="col-md-4 col-12 d-flex justify-content-center mt-3">
                                                                <div class="card" style="/* width: 18rem; */">
                                                                    <img class="card-img-top image" src="${srcImage}" alt="Card image cap">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">${data[i].usu_name}</h5>

                                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                                                            the card's content.</p>
                                                                    </div>
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item" role="button">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <i class="far fa-file-alt"></i> Certificado Trane
                                                                                </div>
                                                                                <div class="col-2">
                                                                                    <a href="https://google.com.br" target="_blank">
                                                                                        <i class="fas fa-file-download"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item" role="button">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <i class="far fa-file-alt"></i> Especialista em Split
                                                                                </div>
                                                                                <div class="col-2">
                                                                                    <a href="https://google.com.br" target="_blank">
                                                                                        <i class="fas fa-file-download"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div style="padding: 2px">                                                                                                                                                                                                                
                                                                        
                                                                                    <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                                                                            
                                                                                    <a target="_blank" href="${phoneLink}" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                                                               
                                                                                    <a href="#tecnicos" class="card-link img-open-modal" id="${data[i].usu_id}"><i class="fas fa-briefcase"></i> Contratar</a>
                                                                               
                                                                    </div>
                                                                </div>
                                                            </div>`;
                            }
                            $('#containerTechnician').html(htmlCards);

                            window.location.href = '#tecnicos';
                        }
                    });

                } else {
                    return;
                }
            
        });
    </script>

    <script>
        $('#checkLocation').change(function() {
            if ($(this)[0].checked) {
                $('#zip_code').val('');
                $('#radius').val('');
                $('#zip_code')[0].disabled = true;
                $('#zip_code').removeClass('is-invalid');
                $('.error-message-zipcode').html(`<p class=""></p>`);
                $('#radius').removeClass('is-invalid');
                $('.error-message-radius').html(`<p class=""></p>`);
            } else {
                $('#zip_code')[0].disabled = false;
                $('#zip_code').val('');
                $('#radius').val('');
            }
        });
    </script>


@stop
