<body class="bg-secondary">
  <!-- navbar  -->
  <?php
  require_once('nav-bar.php');
  if(LoginController::getSesionState()){
  
  
  ?>

  <!-- Este div es el centro donde estan los botones-->
  <div class=" principal-body bg-secondary container-fluid row  g-0  align-items-md-start  ">
    <div class="row  g-3 justify-content-center overflow-hidden">



      <div class=" col-12 col-md-2 d-flex animate__animated animate__fadeInRight  justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent disabled  border-0 " data-bs-toggle="modal"
          data-bs-target="#PageCursando">

          <div class="ratio ratio-1x1 ratio-personalice">
            <img src="icons/cursando-icon-app.svg" alt="cursando_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100  bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline ">Cursando</label>
        </button>
      </div>

      <div
        class="col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-1s justify-content-center">

        <button type="button" class="btn btn-primary bg-transparent disabled  border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice ">
            <img src="icons/materias-icon-app.svg" alt="Materias_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>

          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Materias</label>
        </button>
      </div>
      <div
        class=" col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-2s justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1  ratio-personalice">
            <img src="icons/notas-icon-app.svg" alt="Notas_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Notas</label>
        </button>
      </div>
      <div class="w-100 bg-black"></div>
      <div
        class="col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-3s justify-content-center">
        <a type="button" href="./?controlador=Task&accion=inicio" class="btn btn-primary bg-transparent   border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice">
            <img src="icons/actividades-icon-app.svg" alt="Notas_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Actividades</label>
  </a>
      </div>
      <div
        class="col-12 col-md-2 d-flex animate__animated animate__fadeInRight animate__delay-4s justify-content-center">
        <a href="./?controlador=Periods&accion=inicio" type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice">
            <img src="icons/periodos-icon-app.svg" alt="Peridos_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Periodos</label>
</a>
      </div>
      <div
        class="mb-5 mb-md-0 col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-5s justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent disabled border-0 ">
          <div class="ratio ratio-1x1  ratio-personalice">
            <img src="icons/ajustes-icon-app.svg" alt="Ajustes_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Ajustes</label>
        </button>
      </div>


    </div>


    <!-- UNa imagen de pie -->
    <img class="position-fixed bottom-0 wave start-0 animate__animated " src="icons/wave .svg" alt="wave">
  </div>
  <?php 
  
  }else{  ErrorControl::errorNoLogin(); }?>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>