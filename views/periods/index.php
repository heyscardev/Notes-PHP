<body class="bg-secondary">
  <!-- navbar  -->
  <?php

use function PHPSTORM_META\type;

require_once('views/nav-bar.php');

  ?>
  <div class="col-1  align-items-start justify-content-end d-flex ">
    <button type="button" class="btn btn-primary bg-transparent border-0 mt-3 me-2 btn-close-modal"><img class="btn-close-img arrow-star-icon" src="icons/arrow-star-icon.svg" alt="arrow-icon">
    </button>
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
                <label class="text-white fs-3 fw-bolder">Periodo actual: <span><?php echo $head_principal["period"] ?></span></label>
              </div>
              <div class="row  mx-3 fs-5 ">
                <div class="col   "><label class="mx-2 fw-bolder fs-4" for="">Carrera:</label><label for=""><?php echo $head_principal["carrer"] ?></label></div>

              </div>
              <div class="row mx-3 fs-5">
                <div class="col"><label class="mx-2 fw-bolder fs-4" for="">Estado: </label><label for=""><?php echo $head_principal["state"] ?></label></div>
              </div>

            </div>
            <!--completado row-->
            <div class="col-4 text-center justify-content-center  ">
              <!--completado rounded-->
              <div class="row justify-content-center">
                <div class="col-5">
                  <div class="ratio align-items-center  ratio-1x1 w-auto text-center  text-primary rounded-circle border border-4 border-white   "
                  style="background-image: linear-gradient(to top right ,rgba(52, 200, 212,.2) <?php echo $head_principal["completado"];?>%, rgba( 220, 220, 220,1) 100%);">
                    <div class="  d-flex align-items-center justify-content-center">
                      <div class=""><label class="fs-2 fw-bolder  text-white " for=""><?php echo $head_principal["completado"] ?>%</label></div>
                    </div>


                  </div>
                </div>
              </div>





              <div class="row align-items-center">
                <div class="col"><label class="mx-2 fw-bolder fs-6 " for="">Completado</label></div>
              </div>








            </div>

          </div>
        </div>
      </div>
    </div>




  </div>
  <!--tabla periods -->
  <div class="container h-50 mt-3">
    <table class="table  table-primary border-5 border-white border  rounded table-hover">
      <thead class="text-primary fw-bolder">
        <tr class="text-center text-primary">
          <th>Codigo de Periodo</th>
          <th>F. Inicio</th>
          <th>F. Termina</th>
          <th>Promedio</th>
          <th>Cursado</th>
          <th>opciones</th>
        </tr>
      </thead>
      <tbody class="text-primary">
        <?php

        foreach ($datos_periodos as $period) {
        
        
        
        
        
        ?>
        
          <tr class=" text-center overflow-overflow-hidden lh-lg">

            <td><?php echo $period->getCodPeriod(); ?></td>
            <td><?php echo $period->getStartDate(); ?></td>
            <td><?php echo $period->getEndDate(); ?></td>
            <td><?php echo promedio($period->getIdPeriod()); ?></td>
            <td><?php echo cursado($period->getIdUser()); ?></td>
            <td>
              <button  data-bs-toggle="modal" data-bs-target="#edit-<?php echo $period->getIdPeriod() ?>" class="btn "><img src="icons/edit-icon.svg" alt="edit"></button>
              <a href="./?controlador=Periods&accion=borrar&id=<?php echo $period->getIdPeriod(); ?>" class="btn "><img src="icons/trash-icon.svg" " alt=" delete"></a>
              <a href="" class="btn "><img src="icons/arrow-star-icon.svg" style="transform: rotate(180deg);" alt="ir"></a>
              
            </td>
            <?php  require("views/periods/updateModal.php"); ?>
          </tr>
        <?php }; ?>
      </tbody>
    </table>
  </div>


  <!-- Button trigger modal -->
  <div class="position-absolute bottom-0 m-5 end-0 ">
    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-create" class="   text-primary fw-bolder btn  bg-white  rounded-circle   border-5 border-primary fs-1 p-0 lh-xs px-3 ">
      <img class=" d-flex align-items-center py-3 img-fluid " src="icons/plus-icon.svg" alt=""></button>
  </div>

  <!-- Modal -->
  <div class="modal fade " id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">Registro de Periodo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-2 bg-secondary">
          <!--                   -->
          <form method="post"  class="row g-3 needs-validation" id="form-c-period" novalidate>


            <div class="col-md-12">
              <label for="validationCustomUsername" class="form-label">Codigo</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">#</span>
                <input type="text" class="form-control" name="codigo" id="" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  por favor inserte un codigo
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">fecha de inicio</label>
              <input type="date" name="start_date" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                por favor inserte una fecha
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">fecha de finalizado</label>
              <input type="date" name="end_date" class="form-select" id="validationCustom04" required>

              </input>
              <div class="invalid-feedback">
                por favor inserte una fecha
              </div>

              <div class="col-12">
               
              </div>
          </form>
          <!--                   -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fw-bolder text-primary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary fw-bolder text-white" form="form-c-period" type="submit">Crear</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/validacion.js"></script>
</body>