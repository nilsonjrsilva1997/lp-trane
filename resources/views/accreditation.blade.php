@extends('layouts.layout')
@section('title', 'Titulo da página')
@section('sidebar')
@stop
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row mb-5">
            <div class="col-md-7 col-12 d-flex justify-content-center">
                <section id="sectionMap" class="">
                    <embed id="E" src={{ url('storage/images/map.svg') }} type="image/svg+xml" class="svg">
                    <p id="nome_estado"></p>
                    <p id="capital_estado"></p>
                </section>
            </div>
            <div class="col-md-5 col-12 justify-content-center d-flex flex-column pl-5">
                <h1 class="text-title">Encontre um credenciado no seu estado</h1>
                <form class="mt-3">
                    <div class="form-group">
                        <input type="text" class="form-control cep" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="CEP" maxlength="9">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Raio">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary btn-block">Procurar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row results">
            <div class="col-md-12 col-12 ml-4 text-left">
                <p class="text-left text-results-1">Resultados para CEP 11111-111 em um raio de 10km</p>
                <h1 class="text-title text-left text-results" >Encontramos 12 técnicos na sua região</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>


        </div>

        <div class="row  mt-3">

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>


        </div>

        <div class="row mt-3">

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 d-flex justify-content-center">
                <div class="card img-open-modal" style="/* width: 18rem; */">
                    <img class="card-img-top image" src="https://source.unsplash.com/random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nilson Junior</h5>

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
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="fas fa-envelope"></i> E-mail</a>
                        <a href="#" class="card-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="serviceOptions">
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
                        Atividades
                    </h1>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="d-flex justify-content-start p-3">
                                                <img class="card-img-top w-50"
                                                    src="https://www.w3schools.com/w3images/avatar2.png"
                                                    alt="Card image cap">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <h2 class="card-title p-3">Fulaninho de tal</h2>
                                            <p class="card-text text-silver p-3">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                            </p>
                                            <p class="card-text">
                                            <div class="estrelas p-3">
                                                Avaliações
                                                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                                                <label for="cm_star-1"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-1" name="fb" value="1" />
                                                <label for="cm_star-2"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-2" name="fb" value="2" />
                                                <label for="cm_star-3"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-3" name="fb" value="3" />
                                                <label for="cm_star-4"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-4" name="fb" value="4" />
                                                <label for="cm_star-5"><i class="fa"></i></label>
                                                <input type="radio" id="cm_star-5" name="fb" value="5" />
                                            </div>
                                            </p>
                                            <div class="p-3">
                                                <a href="#" class="btn btn-success">
                                                    <i class="fa fa-whatsapp"></i>
                                                    (13) 99111-5566</a>
                                            </div>
                                        </div>

                                    </div>



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
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                            <div class="col-md-4 col-12">
                                <p>
                                    <a href={{ url('/atividades/manutencao') }} target="_blank"><button
                                            class="btn btn-secondary">Manutenção</button></a>
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                            <div class="col-md-4 col-12">
                                <p>
                                    <a href="https://www.refricode.com.br/garantia/trane" target="_blank"><button
                                            class="btn btn-secondary">Garantia Trane</button></a>
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
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
            $('#serviceOptions').modal('show');
        });

    </script>
    <script>
        $(document).ready(function() {
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
                imgEl.classList.add('technician');
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

                    $('#nome_estado').html('<h1 class="text-title">' + objEstado[siglaEstado][0].state + "</h1>").css({                        
                    });

                    $('#capital_estado').html('<h1 class="text-title">Número de técnicos: ' + objEstado[siglaEstado][0].number_technician + "</h1>")
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
@stop
