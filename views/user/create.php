<body class="bg-secondary">
  <!-- navbar  -->
  <?php
  require_once('views/nav-bar.php');



  ?>


  <div class="row justify-content-center py-4 px-0 m-0">
    <div class="col-10 col-md-4">
      <form class=" bg-white rounded p-4 needs-validation " method="post">
        <div class="mx-2 my-3 mx-lg-3 my-lg-4  justify-content-center">
          <div class="text-center">
            <label class="text-primary fw-bolder fs-4">Registro de Usuario</label>
          </div>
          <?php if ($error != "") { ?>
            <div class="alert alert-danger text-center fs-6 e align-self-center text-dark" role="alert">
              <?php echo $error; ?>
            </div>
          <?php } ?>
          <div class="mb-3 mt-3 ">
            <label for="email" class="form-label  text-black-50 fs-5 ms-4 ">Correo</label>
            <input type="email" name="email" class="form-control text-decoration-none border border-primary border-4 bg-info fw-bolder text-white" id="email   " aria-describedby="emailHelp" required>

          </div>
          <div class="mb-3 ">
            <label for="password" class="form-label text-black-50 fs-5 ms-4">Contraseña</label>
            <input type="password" class="form-control bg-info border border-4 border-primary fw-bolder text-white" id="password" name="password" required>
            <div class="text-center">
              <span id="passwordHelpInline" class="form-text ">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>


          <!-- TODO: This is for server side, there is another version for browser defaults -->
          <div class=" text-center">
            <button type="submit" class="btn btn-outline-secondary     border-4 border-primary text-primary  fw-bolder">Registrar</button>
          </div>
          <div class="text-center mt-3 row">
            <label for="" class=" fs-6 text-black-50">¿ya tienes una cuenta?</label>
            <a class=" bolder text-primary text-primary text-decoration-none animate__animated animate__pulse animate__infinite fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapselogin" aria-expanded="true" aria-controls="collapselogin">Inicia Sesion</a>


          </div>
        </div>

      </form>
    </div>
  </div>



  <!-- UNa imagen de pie -->
  <img class="position-fixed bottom-0 wave start-0 animate__animated " src="icons/wave .svg" alt="wave">
  </div>




  <script src="js/bootstrap.bundle.min.js"></script>
</body>