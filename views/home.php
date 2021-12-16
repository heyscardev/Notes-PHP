

<body class="principal overflow-hidden  ">
  <!-- navbar  -->
 <?php
 require_once('views/nav-bar.php');
 ?>

  <!-- Este div es el del body donde-->
  <div class="hero overflow-hidden ">
    <div class="container ">
      <div class="row flex-lg-row flex-column-reverse ">
        <div class="col-lg-5 text-center text-lg-start text-principal">
          <p class="display-6">Hola,</p>
          <h1
            class="banner-principal display-1 display-lg-2 fw-bolder animate__animated  animate__backInLeft text-primary">
            YO SOY <span class="text-secondary">NOTES</span></h1>
          <p class="subtitle display-6">Estoy aqui para ayudarte con tus notas academicas</p>
          <a href="./?controlador=views&accion=registeruser" type="button"
            class="btn btn-lg btn-outline-primary bg-secondary border-primary text-primary animate__animated animate__infinite  animate__heartBeat animate__slow fw-bolder border-5  ">
            REGISTRATE</a>

        </div>

        <div class="col-lg-7 animate__animated  animate__backInRight 	 justify-content-center cont-img">
          <img class="imagen-principal img-fluid" src="images/imagen-principal.svg" alt="imagen-principal">
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

