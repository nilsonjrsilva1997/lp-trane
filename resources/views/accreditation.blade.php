@extends('layouts.layout')

@section('title', 'Titulo da página')

@section('sidebar')

@stop

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-title">Encontre um credenciado no seu estado</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 col-12 d-flex justify-content-center">
                <section>
                    <embed id="E" src={{ url('storage/images/map.svg') }} type="image/svg+xml">
                    <p id="nome_estado"></p>
                    <p id="capital_estado"></p>
                </section>
            </div>
            
            <div class="col-md-12 col-12 d-flex justify-content-center">
                <form class="mt-3">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-sm cep" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="CEP">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Raio">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Procurar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row d-inline-block text-center mt-3">
            <div class="col-md-12 text-center">
                <h1 class="text-title">Técnicos na região</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Hello, world!</h1>
                </div>
    
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nilson Junior</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" role="button">
                                <div class="row">
                                    <div class="col">
                                        <svg class="svg-inline--fa fa-file-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path></svg><!-- <i class="far fa-file-alt"></i> Font Awesome fontawesome.com --> Certificado Trane
                                    </div>
                                    <div class="col-2">
                                        <a href="https://google.com.br" target="_blank">
                                            <svg class="svg-inline--fa fa-file-download fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"></path></svg><!-- <i class="fas fa-file-download"></i> Font Awesome fontawesome.com -->
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" role="button">
                                <div class="row">
                                    <div class="col">
                                        <svg class="svg-inline--fa fa-file-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path></svg><!-- <i class="far fa-file-alt"></i> Font Awesome fontawesome.com --> Especialista em Split
                                    </div>
                                    <div class="col-2">
                                        <a href="https://google.com.br" target="_blank">
                                            <svg class="svg-inline--fa fa-file-download fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"></path></svg><!-- <i class="fas fa-file-download"></i> Font Awesome fontawesome.com -->
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link"><svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg><!-- <i class="fas fa-envelope"></i> Font Awesome fontawesome.com --> E-mail</a>
                            <a href="#" class="card-link"><svg class="svg-inline--fa fa-whatsapp fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg><!-- <i class="fab fa-whatsapp"></i> Font Awesome fontawesome.com --> WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
          $('.cep').mask('00000-000')
        });
    </script>

    <script>
        $(document).ready(function() {
            const $technicianContainer = $('#technicianContainer');

            const createCard = (technician) => {
                const imgEl = document.createElement('img');
                imgEl.classList.add('rounded-circle');
                imgEl.classList.add('z-depth-2');
                imgEl.classList.add('img-responsive');
                imgEl.classList.add('p-1');
                imgEl.classList.add('img-full');

                imgEl.setAttribute('alt', "")
                imgEl.setAttribute('data-holder-rendered', "true")

                imgEl.src = technician.photo

                return imgEl;
            }

            $.ajax({
                url: "http://localhost:5001/tecnicos",
                method: "GET",
                success: (technicians) => {
                    technicians.forEach(technician => {
                        const card = createCard(technician);
                        // $technicianContainer.append(card);
                    });
                }
            })
        });

    </script>

    <script type="text/javascript">
        window.jQuery || document.write('<script src="scripts/jquery-1.7.2.min.js"><\/script>');

    </script>
    <script>
        async function init() {
            var objEstado = await $.get('http://localhost:5001/tecnicos_regiao');

            var msg = document.getElementById('msg');
            var D = document.getElementById('E');
            SVGDoc = D.getSVGDocument();
            SVGRoot = SVGDoc.documentElement;
            svgns = 'http://www.w3.org/2000/svg';
            var estados = SVGRoot.getElementsByTagName('path');
            var qdeEstados = estados.length;
           
            for (i = 0; i < qdeEstados; i++) {
                estados[i].onmouseover = function(evt) {
                    var x = evt.pageX;
                    var y = evt.pageY + 250;
                    this.style.fill = '#FF2B00';
                    var siglaEstado = this.parentNode.id;

                    $('#nome_estado').html('<img src="bandeiras/' + siglaEstado +
                        '.png" alt="" width="20" height="14" />' + objEstado[siglaEstado][0].state).css({
                        top: y,
                        left: x,
                        padding: '0 0.6em',
                        border: '2px solid white',
                        boxShadow: '4px 4px 6px #444'
                    });

                    $('#capital_estado').html('Número de técnicos: ' + objEstado[siglaEstado][0].number_technician).css({
                        top: y + 25,
                        left: x,
                        padding: '0 0.6em',
                        border: '2px solid white',
                        boxShadow: '4px 4px 6px #444'
                    });
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

@stop
