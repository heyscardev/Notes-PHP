<body class="bg-secondary">
  <!-- navbar  -->
  <?php



require_once('views/nav-bar.php');
require_once("views/headPage.php");
       
  ?>
  
  <!--tabla periods -->
  <div class="container h-50 mt-3">
    <table class="table  table-primary border-5 border-white border  rounded table-hover">
      <thead class="text-primary fw-bolder">
        <tr class="text-center text-primary">
          <th>Codigo de Periodo</th>
          <th>materia</th>
          <th>profesor</th>
          <th>nota para aprobar</th>
          <th>tu nota</th>
          <th>cursado</th>
          <th>opciones</th>
        </tr>
      </thead>
      <tbody class="text-primary">
        <?php

        foreach ($datos_subjects as $dato) {
        
        
        
        
        
        ?>
        
          <tr class=" text-center overflow-overflow-hidden lh-lg">

            <td><?php echo $dato["period"]->getCodPeriod(); ?></td>
            <td><?php echo $dato["subject"]->getName(); ?></td>
            <td><?php echo $dato["subject"]->getProfessorName(); ?></td>
            <td><?php echo $dato["subject"]->getApprovalNote(); ?>%</td>
          
            <td><?php echo Nota_materia($dato["subjectStudied"]->getIdSubjectStudied()); ?> / 100%</td>
            <td><?php echo CURSADO_MATERIA($dato["subjectStudied"]->getIdSubjectStudied()); ?> / 100%</td>
            
            <td>
              <button  data-bs-toggle="modal" data-bs-target="#edit-<?php echo $dato["subjectStudied"]->getIdSubjectStudied(); ?>" class="btn "><img src="icons/edit-icon.svg" alt="edit"></button>
              <a href="./?controlador=subjects&accion=borrar&id=<?php echo $dato["subjectStudied"]->getIdSubjectStudied(); ?>&ids=<?php echo $dato["subjectStudied"]->getIdSubject(); ?>" class="btn "><img src="icons/trash-icon.svg" " alt=" delete"></a>
              <a href=".?controlador=task&accion=inicio&id=<?php echo $dato["subjectStudied"]->getIdSubjectStudied(); ?>" class="btn "><img src="icons/arrow-star-icon.svg" style="transform: rotate(180deg);" alt="ir"></a>
              <?php  include("views/subjects/updateModal.php"); ?>
            </td>
            
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
          <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">Registro de materia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-2 bg-secondary">
          <!--                   -->
          <form method="post"  class="row g-3 needs-validation" id="form-c-subject" novalidate>
        
          <!--       selecpcion periodo            -->
          <div class=" col-md-12 my-2">
            <label for="periodo" class="form-label ">Seleccione Periodo</label>
            <div class="form-group has-validation">

              <select name="idPeriod" id="periodo" class="form-select  " >
                <?php foreach ($periodos_disponibles as $und) {
                ?>
                  <option class="bg-info" value=<?php echo $und->getIdPeriod(); ?>  > <?php echo $und->getCodPeriod(); ?>

                  </option>
                <?php } ?>
              </select>
              <div class="invalid-feedback">
                por favor selepcione un periodo
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <label for="validationCustom03" class="form-label">Nombre de Materia</label>
            <input type="text" name="name" class="form-control" value="" id="validationCustom03" required>
            <div class="invalid-feedback">
              por favor inserte un Nombre de materia valido
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Nota para Aprobar</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">%</span>
              <input type="number" name="approvalNote" step="0.01" max="100" min="1" class="form-control fs-3" id="validationCustom04" value="" required>
              <div class="invalid-feedback">
                por favor un % valido
              </div>
            </div>
          </div>

          <div class="col-md-8 ">
            <label for="validationCustom05" class="form-label">Nombre de profesor</label>
            <input type="text" name="professorName" maxlength="50" minlength="1" class="form-control" id="validationCustom05" value="" required>


            <div class="invalid-feedback">
              por favor un nombre valido
            </div>
          </div>

          
        
          </form>
          <!--                   -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fw-bolder text-primary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary fw-bolder text-white" form="form-c-subject" type="submit">Crear</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/validacion.js"></script>
</body>