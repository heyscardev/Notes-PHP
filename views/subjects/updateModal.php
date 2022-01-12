<!-- Modal -->
<div class="modal fade " id="edit-<?php echo $dato["subjectStudied"]->getIdSubjectStudied(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">MODIFICACION DE PERIODO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-2 bg-secondary">
        <!--                   -->
        <form action="./?controlador=Subjects&accion=editar&id=<?php echo $dato["subjectStudied"]->getIdSubjectStudied();  ?>" method="post" class="row  py-4 g-3 needs-validation" id="form-e-subject<?php echo  $dato["subjectStudied"]->getIdSubjectStudied(); ?>" novalidate>
          <!--       selecpcion periodo            -->
          <div class=" col-md-12 my-2">
            <label for="periodo" class="form-label ">Seleccione Periodo</label>
            <div class="form-group has-validation">

              <select name="idPeriod" id="periodo" class="form-select  " >
                <?php foreach ($periodos_disponibles as $und) {
                ?>
                  <option class="bg-info" value=<?php echo $und->getIdPeriod(); ?> <?php if($und->getIdPeriod() == $dato["subjectStudied"]->getIdPeriod() ){echo "selected=true ";} ?>  > <?php echo $und->getCodPeriod(); ?>

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
            <input type="text" name="name" class="form-control" value="<?php echo $dato["subject"]->getName(); ?>" id="validationCustom03" required>
            <div class="invalid-feedback">
              por favor inserte un Nombre de materia valido
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Nota para Aprobar</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">%</span>
              <input type="number" name="approvalNote" max="100" min="1" step="0.01" class="form-control fs-3" id="validationCustom04" value="<?php echo $dato["subject"]->getApprovalNote(); ?>" required>
              <div class="invalid-feedback">
                por favor un % valido
              </div>
            </div>
          </div>

          <div class="col-md-8 ">
            <label for="validationCustom05" class="form-label">Nombre de profesor</label>
            <input type="text" name="professorName" maxlength="50" minlength="1" class="form-control" id="validationCustom05" value="<?php echo $dato["subject"]->getProfessorName(); ?>" required>


            <div class="invalid-feedback">
              por favor un nombre valido
            </div>
          </div>

          
        </form>
        <!--                   -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fw-bolder text-primary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary fw-bolder text-white" name="editar" form="form-e-subject<?php echo  $dato["subjectStudied"]->getIdSubjectStudied();?>" type="submit">Editar</button>
      </div>
    </div>
  </div>
</div>
