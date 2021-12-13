<body class="bg-secondary">
  <!-- navbar  -->
  <?php
  require_once('nav-bar.php')
  ?>

  <!-- Este div es el centro donde estan los botones-->
  <div class=" principal-body bg-secondary container-fluid row  g-0  align-items-md-start  ">
    <div class="row  g-3 justify-content-center overflow-hidden">



      <div class=" col-12 col-md-2 d-flex animate__animated animate__fadeInRight  justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent  border-0 " data-bs-toggle="modal"
          data-bs-target="#PageCursando">

          <div class="ratio ratio-1x1">
            <img src="icons/cursando-icon-app.svg" alt="cursando_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100  bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Cursando</label>
        </button>
      </div>

      <div
        class="col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-1s justify-content-center">

        <button type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1 ">
            <img src="icons/materias-icon-app.svg" alt="Materias_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>

          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Materias</label>
        </button>
      </div>
      <div
        class=" col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-2s justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1">
            <img src="icons/notas-icon-app.svg" alt="Notas_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Notas</label>
        </button>
      </div>
      <div class="w-100 bg-black"></div>
      <div
        class="col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-3s justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1">
            <img src="icons/notas-icon-app.svg" alt="Notas_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Notas</label>
        </button>
      </div>
      <div
        class="col-12 col-md-2 d-flex animate__animated animate__fadeInRight animate__delay-4s justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1">
            <img src="icons/periodos-icon-app.svg" alt="Peridos_icon"
              class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
          </div>



          <label for="" class=" fs-5 text-primary  text-decoration-underline">Tus Periodos</label>
        </button>
      </div>
      <div
        class="mb-5 mb-md-0 col-12 col-md-2  d-flex animate__animated animate__fadeInRight animate__delay-5s justify-content-center">
        <button type="button" class="btn btn-primary bg-transparent  border-0 ">
          <div class="ratio ratio-1x1">
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

  <!-- Button trigger modal -->

  <div class="modal  fade " id="PageCursando">
    .
    <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered ">
      <div class="modal-content border-0 ">

        <!-- Modal Header -->
        <div class="m-4">
          <div class="row justify-content-between ">

            <div class="col-1  align-items-start justify-content-end d-flex ">
              <button type="button" class="btn btn-primary bg-white border-0 mt-3 me-2 btn-close-modal" data-bs-dismiss="modal"><img
                class="btn-close-img arrow-star-icon" src="icons/arrow-star-icon.svg" alt="arrow-icon"></button>
           </div>

           <div class="col-9 row">

            <div class="col-1">
              <div class="ratio ratio-1x1 ">
                <img src="icons/materias-icon-app.svg" alt="Materias_icon"
                  class="img-boton  rounded-circle border border-5 border-primary w-100 bg-white ">
              </div>
            </div> 

            <div class="col-11 d-flex align-items-center ">
              <div class="content-title-window bg-primary rounded ">
                <div class="row justify-content-evenly">
                  <div class="col-6 ">
                    <h2 class="text-white">Perido: <span> 2-2021</span></h2>
                  </div>
                </div>
              </div>
            </div>
           </div>
          
            <div class="col-1  align-items-start justify-content-end d-flex ">
             
                <button type="button" class="btn btn-primary bg-white border-0 mt-3  btn-close-modal" data-bs-dismiss="modal"><img
                  class="btn-close-img" src="icons/close-icon.svg" alt=""></button>
           
             </div>
          
          </div>


        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <h3>Some text to enable scrolling..</h3>
          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>

          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>