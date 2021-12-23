

  <!-- Modal -->
  <div class="modal fade " id="edit-<?php echo $period->getIdPeriod() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          
          <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">MODIFICACION DE PERIODO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-2 bg-secondary">
          <!--                   -->
          <form action="./?controlador=Periods&accion=editar&id=<?php echo $period->getIdPeriod();  ?>" method="post" class="row g-3 needs-validation" id="form-e-period<?php echo $period->getIdPeriod(); ?>" novalidate>


            <div class="col-md-12">
              <label for="validationCustomUsername" class="form-label">CODIGO</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">#</span>
                <input type="text" class="form-control" name="cod_period" id="" aria-describedby="inputGroupPrepend" value="<?php echo $period->getCodPeriod(); ?>" required>
                <div class="invalid-feedback">
                  por favor inserte un codigo
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">fecha de inicio</label>
              <input type="date" name="start_date" class="form-control" value="<?php echo $period->getStartDate(); ?>" id="validationCustom03" required>
              <div class="invalid-feedback">
                por favor inserte una fecha
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">fecha de finalizado</label>
              <input type="date" name="end_date" class="form-select" id="validationCustom04" value="<?php echo $period->getEndDate(); ?>" required>

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
          <button class="btn btn-primary fw-bolder text-white" name="editar" form="form-e-period<?php echo $period->getIdPeriod(); ?>" type="submit">Editar</button>
        </div>
      </div>
    </div>
  </div>
  </div>