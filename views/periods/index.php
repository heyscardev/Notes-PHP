<body class="bg-secondary">
  <!-- navbar  -->
  <?php

use function PHPSTORM_META\type;

require_once('views/nav-bar.php');
require_once("views/headPage.php");
  ?>
 
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
              <a href="./?controlador=Subjects&accion=inicio&id=<?php echo $period->getIdPeriod(); ?>" class="btn "><img src="icons/arrow-star-icon.svg" style="transform: rotate(180deg);" alt="ir"></a>
              
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