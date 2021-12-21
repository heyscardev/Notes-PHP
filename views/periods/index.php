<body class="bg-secondary">
  <!-- navbar  -->
  <?php
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
                <label class="text-white fs-3 fw-bolder">Perido: <span><?php echo $head_principal["period"] ?></span></label>
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
                  <div class="ratio align-items-center  ratio-1x1 w-auto text-center bg-secondary text-primary rounded-circle border border-4 border-white   ">
                    <div class="  d-flex align-items-center justify-content-center">
                      <div class=""><label class="fs-2 fw-bolder   " for=""><?php echo $head_principal["completado"] ?>%</label></div>
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
        <th >Codigo  de Periodo</th>
        <th>F. Inicio</th>
        <th>F. Termina</th>
        <th>Promedio</th>
        <th>Cursado</th>
        <th>opciones</th>
      </tr>
    </thead>
    <tbody class="text-primary">
      <?php 

      foreach($datos_periodos as $period){
      ?>
      <tr class=" text-center overflow-overflow-hidden lh-lg">
        
        <td><?php echo $period->getCodPeriod(); ?></td>
        <td><?php echo $period->getStartDate(); ?></td>
        <td><?php echo $period->getEndDate(); ?></td>
        <td><?php echo promedio($period->getIdPeriod()); ?></td>
        <td><?php echo cursado($period->getIdPeriod()); ?></td>
        <td>
        <a href="" class="btn "><img src="icons/edit-icon.svg"  alt="edit"></a>
        <a href="" class="btn " ><img src="icons/trash-icon.svg" " alt="delete"></a>
        <a href="" class="btn "><img src="icons/arrow-star-icon.svg" style="transform: rotate(180deg);" alt="ir"></a>
      </td>

      </tr>
      <?php }; ?>
    </tbody>
  </table>
  </div>
  

  <!-- Button trigger modal -->
  <div class="position-absolute bottom-0 m-5 end-0 ">
  <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="   text-primary fw-bolder btn  bg-white  rounded-circle   border-5 border-primary fs-1 p-0 lh-xs px-3 " > 
    <img class=" d-flex align-items-center py-3 img-fluid " src="icons/plus-icon.svg" alt=""></button>
  </div>

      <!-- Modal -->
      <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary fs-1" id="exampleModalLabel">Registro de Periodo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--                   -->
              <form class="row g-3 needs-validation" novalidate>
  
 
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Codigo</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        por favor inserte un codigo
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
              <!--                   -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<script src="js/bootstrap.bundle.min.js"></script>
</body>