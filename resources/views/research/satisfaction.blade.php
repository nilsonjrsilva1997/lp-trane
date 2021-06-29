@extends('layouts.layout-email')

@section('title', 'Pesquisa de satisfação')

@section('sidebar')
<div class="container d-flex flex-fill flex-column justify-content-center">
    <div class="row justify-content-center align-items-center py-5">
        <img src={{ url('storage/images/logo-refriplay-color.png') }} data-toggle="tooltip"
            data-placement="top" title="Conheça a Trane" role="button" style="
max-width: 230px;
margin-right: 40px;
"><img src={{ url('storage/images/logo-trane-color.svg') }} alt="" class="img-fluid">
    </div>



</div>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 d-flex justify-content-center">
                <ol>
                    <li>Qual sua avaliação referente a qualidade dos serviços prestados pelo profissional?</li>
                    <ul>
                        <li class="list-style-none">
                            <div class="estrelas">
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
                        </li>
                    </ul>
                    <li>Qual sua avaliação referente a educação e cordialidade do profissional?</li>
                    <ul>
                        <li class="list-style-none">
                            <div class="estrelas">
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
                        </li>
                    </ul>
                    <li>O profissional sanou todas as suas dúvidas?​</li>
                    <ul>
                        <li class="list-style-none">
                            <div class="estrelas">
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
                        </li>
                    </ul>
                    <li>Você recomendaria este profissional a algum amigo, colega ou familiar?</li>
                    <ul>
                        <li class="list-style-none">
                            <div class="estrelas">
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
                        </li>
                    </ul>
                    
                    <li>Fique à vontade para deixar algum comentário</li>
                    <li class="list-style-none">
                        <input type="text" class="form-control w-100">
                    </li>

                    <li class="list-style-none mt-3 w-100 d-flex justify-content-end">
                        <button class="btn btn-success w-100">Enviar Respostas</button>
                    </li>

                    
                </ol>

               
            </div>
        </div>
    </div>


    <script>
        function Avaliar(estrela) {
            var url = window.location;
            url = url.toString()
            url = url.split("index.html");
            url = url[0];

            var s1 = document.getElementById("s1").src;
            var s2 = document.getElementById("s2").src;
            var s3 = document.getElementById("s3").src;
            var s4 = document.getElementById("s4").src;
            var s5 = document.getElementById("s5").src;
            var avaliacao = 0;

            if (estrela == 5) {
                if (s5 == url + "img/star0.png") {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star1.png";
                    document.getElementById("s4").src = "img/star1.png";
                    document.getElementById("s5").src = "img/star1.png";
                    avaliacao = 5;
                } else {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star1.png";
                    document.getElementById("s4").src = "img/star1.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 4;
                }
            }

            //ESTRELA 4
            if (estrela == 4) {
                if (s4 == url + "img/star0.png") {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star1.png";
                    document.getElementById("s4").src = "img/star1.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 4;
                } else {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star1.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 3;
                }
            }

            //ESTRELA 3
            if (estrela == 3) {
                if (s3 == url + "img/star0.png") {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star1.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 3;
                } else {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star0.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 2;
                }
            }

            //ESTRELA 2
            if (estrela == 2) {
                if (s2 == url + "img/star0.png") {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star1.png";
                    document.getElementById("s3").src = "img/star0.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 2;
                } else {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star0.png";
                    document.getElementById("s3").src = "img/star0.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 1;
                }
            }

            //ESTRELA 1
            if (estrela == 1) {
                if (s1 == url + "img/star0.png") {
                    document.getElementById("s1").src = "img/star1.png";
                    document.getElementById("s2").src = "img/star0.png";
                    document.getElementById("s3").src = "img/star0.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 1;
                } else {
                    document.getElementById("s1").src = "img/star0.png";
                    document.getElementById("s2").src = "img/star0.png";
                    document.getElementById("s3").src = "img/star0.png";
                    document.getElementById("s4").src = "img/star0.png";
                    document.getElementById("s5").src = "img/star0.png";
                    avaliacao = 0;
                }
            }

            document.getElementById('rating').innerHTML = avaliacao;

        }
    </script>
@stop
