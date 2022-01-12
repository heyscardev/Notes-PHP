
<!-- Modal NOTAS -->
<div class="modal fade " id="nota-<?php echo $dato["task"]->getIdTask() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">REGISTRAR NOTA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-2 bg-secondary">
                <form action="./?controlador=Task&accion=ingresarNota&id=<?php echo $dato["task"]->getIdTask();  ?>" method="post" class="row g-3 needs-validation" id="form-n-taskend<?php echo $dato["task"]->getIdTask(); ?>" novalidate>
                    <div class="col-md-9">
                    <div class="form-group has-validation">
                        <div class="col-md-10">
                            <label for="validationCustom03" class="form-label">INGRESAR NOTA</label>
                            <input type="number" max=100 min=0 step="0.01" placeholder="Ingrese la nota adquirida"  name="nota" class="form-control" value=<?php if(isset($dato["taskend"])){ echo $dato["taskend"]->getExamNote();}else{echo "no tiene nota aun";} ?> id="validationCustom04" required>
                            <div class="invalid-feedback">
                                por favor inserte un valor valido
                            </div>
                        </div>
                    <div class="col-12">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bolder text-primary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary fw-bolder text-white" name="ingresarNota" form="form-n-taskend<?php echo $dato["task"]->getIdTask(); ?>" type="submit">Guardar</button>
            </div>
        </div>
    </div>
</div>