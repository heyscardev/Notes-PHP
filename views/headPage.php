<div class="col-1  align-items-start justify-content-end d-flex ">
  <a type="button" href="./?controlador=views&accion=app" class="btn btn-primary bg-transparent border-0 mt-3 me-2 btn-close-modal"><img class="btn-close-img arrow-star-icon" src="icons/arrow-star-icon.svg" alt="arrow-icon">
</a>
</div>
<!--cabecera -->
<div class="row  justify-content-center ">



  <div class="col-12  col-md-9 row d-flex flex-column flex-md-row align-items-center justify-content-center">
    <!--redondo -->
    <div class="col-5 col-md-1 ">
      <div class="ratio ratio-1x1 ratio-personalice  ">
        <img src="icons/materias-icon-app.svg" alt="Materias_icon" class="img-boton  rounded-circle border border-5 border-primary w-100  bg-white ">
      </div>
    </div>
    <!-- body de cabecera-->
    <div class="col-12 col-md-11 d-flex align-items-center   ">
      <div class="content-title-window bg-primary rounded ps-5">
        <div class="row align-items-center text-white ps-5 ">
          <div class="col  ">
            <div class="row ">
              <label class="text-white fs-1 fw-bolder"> <span><?php echo $head_principal["title"] ?></span></label>
            </div>
            <div class="row  mx-3 fs-5 ">
              <div class="col   "><label for=""><?php echo $head_principal["carrer"] ?></label></div>

            </div>
            <div class="row mx-3 fs-5">
              <div class="col"><label for=""><?php echo $head_principal["state"] ?></label></div>
            </div>

          </div>
          <!--completado row-->
          <div class="col-4 text-center justify-content-center  ">
            <!--completado rounded-->
            <div class="row justify-content-center">
              <div class="col-5">
                <div class="ratio align-items-center  ratio-1x1 w-auto text-center  text-primary rounded-circle border border-5 border-white   " style="background-image: linear-gradient(to top ,rgba(0, 0, 0,.5) <?php echo $head_principal["promedio"]-15; ?>%, rgba( 220, 220, 220,.8) 100%);">
                  <div class="  d-flex align-items-center justify-content-center">
                    <div class=""><label class="fs-1   text-white " for=""><?php echo $head_principal["promedio"] ?></label></div>
                  </div>


                </div>
              </div>
            </div>





            <div class="row align-items-center">
              <div class="col"><label class="mx-2 fw-bolder fs-4 " for="">Promedio</label></div>
            </div>








          </div>

        </div>
      </div>
    </div>
  </div>




</div>