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
         <section id="sectionMap">
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
         <div class="col-md-4 col-12">
            <div class="card w-100">
               <div class="d-flex justify-content-center mt-3">                                        
                  <img class="card-img-top w-25 img-open-modal" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h5 class="card-title">Fulaninho de tal</h5>
                  <p class="card-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <p class="card-text">
                     Avaliações 
                  <div class="estrelas">
                     <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                     <label for="cm_star-1"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-1" name="fb" value="1"/>
                     <label for="cm_star-2"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-2" name="fb" value="2"/>
                     <label for="cm_star-3"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-3" name="fb" value="3"/>
                     <label for="cm_star-4"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-4" name="fb" value="4"/>
                     <label for="cm_star-5"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-5" name="fb" value="5"/>
                  </div>
                  </p>
                  <a href="#" class="btn btn-primary">
                  <i class="fa fa-whatsapp"></i>
                  (13) 99111-5566</a>
               </div>
            </div>
            
         </div>
         <div class="col-md-4 col-12">
            <div class="card w-100">
               <div class="d-flex justify-content-center mt-3">                                        
                  <img class="card-img-top w-25 img-open-modal" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h5 class="card-title">Fulaninho de tal</h5>
                  <p class="card-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <p class="card-text">
                     Avaliações 
                  <div class="estrelas">
                     <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                     <label for="cm_star-1"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-1" name="fb" value="1"/>
                     <label for="cm_star-2"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-2" name="fb" value="2"/>
                     <label for="cm_star-3"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-3" name="fb" value="3"/>
                     <label for="cm_star-4"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-4" name="fb" value="4"/>
                     <label for="cm_star-5"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-5" name="fb" value="5"/>
                  </div>
                  </p>
                  <a href="#" class="btn btn-primary">
                  <i class="fa fa-whatsapp"></i>
                  (13) 99111-5566</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="card w-100">
               <div class="d-flex justify-content-center mt-3">                                        
                  <img class="card-img-top w-25 img-open-modal" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h5 class="card-title">Fulaninho de tal</h5>
                  <p class="card-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <p class="card-text">
                     Avaliações 
                  <div class="estrelas">
                     <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                     <label for="cm_star-1"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-1" name="fb" value="1"/>
                     <label for="cm_star-2"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-2" name="fb" value="2"/>
                     <label for="cm_star-3"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-3" name="fb" value="3"/>
                     <label for="cm_star-4"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-4" name="fb" value="4"/>
                     <label for="cm_star-5"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-5" name="fb" value="5"/>
                  </div>
                  </p>
                  <a href="#" class="btn btn-primary">
                  <i class="fa fa-whatsapp"></i>
                  (13) 99111-5566</a>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-4 col-12">
            <div class="card w-100">
               <div class="d-flex justify-content-center mt-3">                                        
                  <img class="card-img-top w-25 img-open-modal" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h5 class="card-title">Fulaninho de tal</h5>
                  <p class="card-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <p class="card-text">
                     Avaliações 
                  <div class="estrelas">
                     <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                     <label for="cm_star-1"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-1" name="fb" value="1"/>
                     <label for="cm_star-2"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-2" name="fb" value="2"/>
                     <label for="cm_star-3"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-3" name="fb" value="3"/>
                     <label for="cm_star-4"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-4" name="fb" value="4"/>
                     <label for="cm_star-5"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-5" name="fb" value="5"/>
                  </div>
                  </p>
                  <a href="#" class="btn btn-primary">
                  <i class="fa fa-whatsapp"></i>
                  (13) 99111-5566</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="card w-100">
               <div class="d-flex justify-content-center mt-3">                                        
                  <img class="card-img-top w-25 img-open-modal" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h5 class="card-title">Fulaninho de tal</h5>
                  <p class="card-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <p class="card-text">
                     Avaliações 
                  <div class="estrelas">
                     <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                     <label for="cm_star-1"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-1" name="fb" value="1"/>
                     <label for="cm_star-2"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-2" name="fb" value="2"/>
                     <label for="cm_star-3"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-3" name="fb" value="3"/>
                     <label for="cm_star-4"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-4" name="fb" value="4"/>
                     <label for="cm_star-5"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-5" name="fb" value="5"/>
                  </div>
                  </p>
                  <a href="#" class="btn btn-primary">
                  <i class="fa fa-whatsapp"></i>
                  (13) 99111-5566</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="card w-100">
               <div class="d-flex justify-content-center mt-3">                                        
                  <img class="card-img-top w-25 img-open-modal" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h5 class="card-title">Fulaninho de tal</h5>
                  <p class="card-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <p class="card-text">
                     Avaliações 
                  <div class="estrelas">
                     <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                     <label for="cm_star-1"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-1" name="fb" value="1"/>
                     <label for="cm_star-2"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-2" name="fb" value="2"/>
                     <label for="cm_star-3"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-3" name="fb" value="3"/>
                     <label for="cm_star-4"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-4" name="fb" value="4"/>
                     <label for="cm_star-5"><i class="fa"></i></label>
                     <input type="radio" id="cm_star-5" name="fb" value="5"/>
                  </div>
                  </p>
                  <a href="#" class="btn btn-primary">
                  <i class="fa fa-whatsapp"></i>
                  (13) 99111-5566</a>
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
                                        <img class="card-img-top w-75" src="https://www.w3schools.com/w3images/avatar2.png" alt="Card image cap">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12 p-3">
                                <h2 class="card-title">Fulaninho de tal</h2>
                              <p class="card-text">
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                              <p class="card-text text-silver">
                              <div class="estrelas">
                                 Avaliações 
                                 <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                 <label for="cm_star-1"><i class="fa"></i></label>
                                 <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                 <label for="cm_star-2"><i class="fa"></i></label>
                                 <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                 <label for="cm_star-3"><i class="fa"></i></label>
                                 <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                 <label for="cm_star-4"><i class="fa"></i></label>
                                 <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                 <label for="cm_star-5"><i class="fa"></i></label>
                                 <input type="radio" id="cm_star-5" name="fb" value="5"/>
                              </div>
                              </p>
                              <a href="#" class="btn btn-success">
                              <i class="fa fa-whatsapp"></i>
                              (13) 99111-5566</a>
                                </div>

                            </div>
                           
                              
                           
                        </div>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-md-4 col-12">
                        <p>
                           <a href={{ url('/atividades/instalacao') }} target="_blank"><button class="btn btn-secondary">Instalação</button></a>
                        </p>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry.                                   
                        </p>
                     </div>
                     <div class="col-md-4 col-12">
                        <p>
                           <a href={{ url('/atividades/manutencao') }} target="_blank"><button class="btn btn-secondary">Manutenção</button></a>
                        </p>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry.                                   
                        </p>
                     </div>
                     <div class="col-md-4 col-12">
                        <p>
                           <a href="https://www.refricode.com.br/garantia/trane" target="_blank"><button class="btn btn-secondary">Garantia Trane</button></a>
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