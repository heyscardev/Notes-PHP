<form class=" formulario-sesion collapse bg-white border-3" method="post" id="collapselogin">
          <div class="mx-2 my-3 mx-lg-3 my-lg-4  justify-content-center">
            <div class="text-center">
              <label class="text-primary fw-bolder fs-4">LOGIN</label>
            </div>
            <div class="mb-3 mt-3 ">
              <label for="exampleInputEmail1"  class="form-label  text-black-50 fs-5 ms-4 ">Correo</label>
              <input type="email" name="email"
                class="form-control text-decoration-none border border-primary border-4 bg-info fw-bolder text-white"
                id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3 ">
              <label for="exampleInputPassword1" class="form-label text-black-50 fs-5 ms-4">Contraseña</label>
              <input type="password" name="password" class="form-control bg-info border border-4 border-primary fw-bolder text-white" id="exampleInputPassword1">
            </div>
            <!--<div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">sesion activa</label>
            </div>-->
            <div class=" text-center">
              <button type="submit" name="iniciar_session"
                class="btn btn-outline-secondary     border-4 border-primary text-primary  fw-bolder">iniciar
                sesion</button>
            </div>
            <div class="text-center mt-3 row">
              <label for="" class=" fs-6 text-black-50">¿no tienes una cuenta?</label>
              <a href="./?controlador=users&accion=register"
                class="text-primary text-decoration-none animate__animated animate__pulse animate__infinite fw-bolder">Registrate</a>
            </div>
          </div>

        </form>