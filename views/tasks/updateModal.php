<!-- Modal -->
  <div class="modal fade " id="edit-<?php echo $dato["task"]->getIdTask() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          
          <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">MODIFICACION DE TAREA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-2 bg-secondary">
          <!--                   -->
          <form action="./?controlador=Task&accion=editar&id=<?php echo $dato["task"]->getIdTask();  ?>" method="post" class="row g-3 needs-validation" id="form-e-task<?php echo $dato["task"]->getIdTask(); ?>" novalidate>
            <!--       seleccion tarea            -->
              <div class="col-md-9">
                
                <div class="form-group has-validation">

              <div class="col-md-10">
                <label for="validationCustom03" class="form-label">Tarea</label>
                <input type="text" maxlenght=100 minlength=0 placeholder="Ingrese el nombre de la tarea" step name="nombre_tarea" class="form-control" value = <?php echo $dato["task"]->getName();  ?> id="validationCustom03" required>
                <div class="invalid-feedback">
                  por favor inserte un nombre valido
                </div>
              </div>

                 
                </div>
              </div>
<!--       selecccion de corte            -->
              <div class="col-md-3">
                <label for="validationCustomUsername" class="form-label">Corte</label>
                <div class="input-group has-validation text-primary fs-5" required>

                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" <?php if($dato["task"]->getNCorte()==1) echo "checked";?> name="corte" id="inlineRadio1" value="1" required >
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" <?php if($dato["task"]->getNCorte()==2) echo "checked";?> name="corte" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" <?php if($dato["task"]->getNCorte()==3) echo "checked";?> name="corte" id="inlineRadio3" value="3">
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

                 <select name="materia_tarea" id="" class="form-control form-control-lg bg-info " >
                    <?php foreach ($materias_disponibles as $und) {
                    ?>
                    <option class="" value="<?php echo $und->getIdSubject(); ?>" <?php if ($und->getIdSubject() == $dato["subject"]->getIdSubject())echo "selected"; ?> > <?php echo $und->getName()."-".$und->getProfessorName(); ?> 
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
                <input type="number" max=100 min=0 placeholder="Ingrese el peso de nota" step="0.01" name="nota_tarea" class="form-control" id="validationCustom03" value="<?php echo $dato["task"]->getSubjectNote(); ?>" required>
                <div class="invalid-feedback">
                  por favor inserte una Nota valida
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Descripción</label>
                <input type="text" value="<?php echo $dato["task"]->getDescription(); ?>" maxlength=100 mminlength=0 placeholder="Descripción" step name="descripcion_tarea" class="form-control" id="validationCustom03"  required>
                <div class="invalid-feedback">
                  por favor inserte una descripción valida
                </div>
              </div>


              <div class="col-md-6 ">
                <label for="validationCustom04" class="form-label">Fecha de entrega</label>
                <input type="datetime-local" name="end_date_tarea" class="form-select" id="validationCustom04" required value="<?php 
                $date = date_create($dato["task"]->getDeliverDate()); echo date_format($date,"Y/m/d")."T".date_format($date,"H:i"); ?>">

                <?php 
                $date = date_create($dato["task"]->getDeliverDate());
                echo date_format($date,"Y/m/d")."T".date_format($date,"H:i");
                ?>
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
          <button class="btn btn-primary fw-bolder text-white" name="editar" form="form-e-task<?php echo $dato["task"]->getIdTask(); ?>" type="submit">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  </div>