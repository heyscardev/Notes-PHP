<body class="bg-secondary">
  <!-- navbar  -->
  <?php
  require_once('nav-bar.php');
  if(LoginController::getSesionState()){
  
  
  ?>

  
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
    <div
        class=" d-flex my-5   justify-content-center">
        <a href="./?controlador=Periods&accion=inicio" type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice-menu">
            <img src="icons/periodos-icon-app.svg" alt="Peridos_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-4 text-primary  text-decoration-underline">Tus Periodos</label>
</a>
       
      </div>
    </div>
    <div class="carousel-item ">
    <div
        class=" d-flex my-5   justify-content-center">

        <a type="button"  href="./?controlador=Subjects&accion=inicio" class="btn btn-primary bg-transparent   border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice-menu ">
            <img src="icons/materias-icon-app.svg" alt="Materias_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>

          <label for="" class=" fs-4 text-primary  text-decoration-underline">Tus Materias</label>
  </a>
      </div>
    </div>
   
    <div class="carousel-item">
    <div
        class=" d-flex my-5   justify-content-center">
        <a type="button" href="./?controlador=Task&accion=inicio" class="btn btn-primary bg-transparent   border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice-menu">
            <img src="icons/actividades-icon-app.svg" alt="Notas_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-4 text-primary  text-decoration-underline">Actividades</label>
  </a>
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Este div es el centro donde estan los botones
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

        <a type="button"  href="./?controlador=Subjects&accion=inicio" class="btn btn-primary bg-transparent   border-0 ">
          <div class="ratio ratio-1x1 ratio-personalice ">
            <img src="icons/materias-icon-app.svg" alt="Materias_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>

          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Materias</label>
  </a>
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
-->

    <!-- UNa imagen de pie -->
    <img class="position-fixed bottom-0 wave start-0 animate__animated " src="icons/wave .svg" alt="wave">
  </div>
  <?php 
  
  }else{  ErrorControl::errorNoLogin(); }?>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>