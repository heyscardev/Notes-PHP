<body class="bg-secondary">
  <!-- navbar  -->
  <?php



  require_once('views/nav-bar.php');
require_once('views/headPage.php');
  ?>
 



          
  <!--<div class="container my-3">
    <div class="container bg-secondary border border-primary  shadow-lg row rounded">
      <div class="col-lg-9"></div>
      <div class="col-lg-3 py-1">
        <form action="./?controlador=Task&accion=buscar" method="POST">
          <div class="input-group ">


            <span class="bg-secondary border-start  border-primary py-2 px-3 rounded-start" id="inputGroupPrepend">#</span>
            <input type="text" class="form-control" aria-describedby="inputGroupPrepend">
            <button type="submit" class="btn btn-primary">Buscar</button>

          </div>
        </form>
      </div>
    </div>-->
    <!--tabla periods -->
    <div class="container h-50 mt-3 ">
      <table class="table  table-primary border-5 border-white border  rounded table-hover">
        <thead class="text-primary fw-bolder">
          <tr class="text-center text-primary">
            <th>Codigo de Periodo</th>
            <!--1-->
            <th>Corte</th>
            <th>Materia</th>
            <!--2-->
            <th>Tarea</th>
            <!--3-->
            <th>descripcion</th>
            <!--4-->
            <th>peso Neto</th>
            <!--5-->
            <th>dia de entrega</th>
            <!--6-->
            <th>Nota estudiante</th>
            <!--7-->
            <th>Nota estudiante (NETO)</th>
            <th>opciones</th>
            <!--9-->
          </tr>
        </thead>
        <tbody class="text-primary">
          <?php

          foreach ($datos as $dato) {
          ?>

            <tr class=" text-center overflow-overflow-hidden lh-lg">

              <!--1-->
              <td><?php echo $dato["period"]->getCodPeriod(); ?></td>
              <!--2-->
              <td><?php echo $dato["task"]->getNCorte(); ?></td>
              <!--3-->
              <td><?php echo $dato["subject"]->getName(); ?></td>
              <!--4-->
              <td><?php echo $dato["task"]->getName(); ?></td>
              <!--5-->
              <td><?php echo $dato["task"]->getDescription(); ?></td>
              <!--6-->
              <td><?php echo $dato["task"]->getSubjectNote(); ?>%</td>
              <!--7-->
              <td><?php echo $dato["task"]->getDeliverDate(); ?></td>
              <!--8-->
              <td><?php if (isset($dato["taskend"])) {
                    echo $dato["taskend"]->getExamNote();
                  } else {
                    echo "--";
                  } ?></td>
                  <td><?php  if (isset($dato["taskend"])){echo $dato["taskend"]->getExamNote()/ 5;}else {
                    echo "--";
                  };
                   ?></td>

              <!--9-->
              <td>
                <button data-bs-toggle="modal" data-bs-target="#edit-<?php echo $dato["task"]->getIdTask(); ?>" class="btn "><img src="icons/edit-icon.svg" alt="edit"></button>
                <a href="./?controlador=Task&accion=borrar&id=<?php echo $dato["task"]->getIdTask(); ?>" class="btn "><img src="icons/trash-icon.svg" " alt=" delete"></a>
                <button data-bs-toggle="modal" data-bs-target="#nota-<?php echo $dato["task"]->getIdTask() ?>" class="btn "><label class="border border-3 border-primary rounded p-1 text-primary">NOTA</label></button>
                <?php require("views/tasks/updateModal.php") ?>
                <?php require("views/tasks/noteModal.php") ?>
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
            <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">Registro de Tarea</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body py-2 bg-secondary">

            <form method="post" ac class="row g-3 needs-validation" id="form-c-task" novalidate>
              <!--       seleccion tarea            -->
              <div class="col-md-9">

                <div class="form-group has-validation">

                  <div class="col-md-10">
                    <label for="validationCustom03" class="form-label">Tarea</label>
                    <input type="text" maxlenght=100 minlength=0 placeholder="Ingrese el nombre de la tarea" step name="nombre_tarea" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                      por favor inserte un nombre valido
                    </div>
                  </div>

                  <div class="invalid-feedback">
                    por favor seleccione un periodo
                  </div>
                </div>
              </div>
              <!--       selecccion de corte            -->
              <div class="col-md-3">
                <label for="validationCustomUsername" class="form-label">Corte</label>
                <div class="input-group has-validation text-primary fs-5" required>

                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="corte" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="corte" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="corte" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="inlineRadio3">3</label>
                  </div>
                  <div class="invalid-feedback">
                    por seleccione un corte
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <label for="validationCustomUsername " class="form-label">Seleccione Materia</label>
                <div class="form-group has-validation">

                  <select name="materia_tarea" id="" class="form-control form-control-lg bg-info ">
                    <?php foreach ($materias_disponibles as $und) {
                    ?>
                      <option class="" value=<?php echo $und->getIdSubject(); ?>> <?php echo $und->getName() . "-" . $und->getProfessorName(); ?>

                      </option>
                    <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                    por favor selepcione una materia
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Nota de Peso en el corte</label>
                <input type="number" max=100 min=0 placeholder="Ingrese el peso de nota" step name="nota_tarea" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  por favor inserte una Nota valida
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Descripción</label>
                <input type="text" maxlength=100 mminlength=0 placeholder="Descripción" step name="descripcion_tarea" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  por favor inserte una descripción valida
                </div>
              </div>


              <div class="col-md-6 ">
                <label for="validationCustom04" class="form-label">Fecha de entrega</label>
                <input type="datetime-local" name="end_date_tarea" class="form-select" id="validationCustom04" required>

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
            <button class="btn btn-primary fw-bolder text-white" form="form-c-task" type="submit">Crear</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/validacion.js"></script>
</body>