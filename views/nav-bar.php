<nav class="navbar navbar-expand-lg py-2 fs-5 bg-light">
    <!--Cada cosa que se hace en Bootstrap se hace con un div para que sea responsive-->
    <div class="container-lg justify-content-between">
      <div class="menu">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #34C8D4;">
            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mb-a mb-lg-0">
            <li class="nav-item">
              <a class="nav-link   active text-primary" aria-current="page" href="./">Home</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="./?controlador=views&accion=app">
                Note
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Tus Carreras</a></li>
                <li><a class="dropdown-item" href="#">Tus Materias</a></li>

                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link ">AboutUS</a>
            </li>
          </ul>

        </div>
      </div>
      <a class="navbar-brand  text-primary fw-bolder fs-1 position-absolute top-50 start-50 translate-middle"
        href="#">NO<span class="text-white ">TES</span>
      </a>
      <div class="">
        <form class=" formulario-sesion collapse bg-white border-3" id="collapselogin">
          <div class="mx-2 my-3 mx-lg-3 my-lg-4  justify-content-center">
            <div class="text-center">
              <label class="text-primary fw-bolder fs-4">LOGIN</label>
            </div>
            <div class="mb-3 mt-3 ">
              <label for="exampleInputEmail1" class="form-label  text-black-50 fs-5 ms-4 ">Correo</label>
              <input type="email"
                class="form-control text-decoration-none border border-primary border-4 bg-info fw-bolder text-white"
                id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3 ">
              <label for="exampleInputPassword1" class="form-label text-black-50 fs-5 ms-4">Contraseña</label>
              <input type="password" class="form-control bg-info border border-4 border-primary fw-bolder text-white" id="exampleInputPassword1">
            </div>
            <!--<div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">sesion activa</label>
            </div>-->
            <div class=" text-center">
              <button type="submit"
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

        <div class=" boton-login align-items-end">
          <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapselogin"
            aria-expanded="true" aria-controls="collapselogin">
            <div class="row align-content-lg-center ">
             
                <span class="col-6 lh-lg  d-none d-md-block align-items-lg-center text-end fw-bolder fs-4 text-white ">Login 
                </span>
          
              <div class="col-6">
                <svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-name="Layer 1"
                class="icon-login d-md-grid" viewBox="0 0 698 698">
                <defs>
                  <linearGradient id="b247946c-c62f-4d08-994a-4c3d64e1e98f-290" x1="349" y1="698" x2="349"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="gray" stop-opacity="0.25" />
                    <stop offset="0.54" stop-color="gray" stop-opacity="0.12" />
                    <stop offset="1" stop-color="gray" stop-opacity="0.1" />
                  </linearGradient>
                </defs>
                <title>profile pic</title>
                <g opacity="0.5">
                  <circle cx="349" cy="349" r="349" fill="url(#b247946c-c62f-4d08-994a-4c3d64e1e98f-290)" />
                </g>
                <circle cx="349.68" cy="346.77" r="341.64" fill="#f5f5f5" />
                <path
                  d="M601,790.76a340,340,0,0,0,187.79-56.2c-12.59-68.8-60.5-72.72-60.5-72.72H464.09s-45.21,3.71-59.33,67A340.07,340.07,0,0,0,601,790.76Z"
                  transform="translate(-251 -101)" fill="#34c8d4" />
                <circle cx="346.37" cy="339.57" r="164.9" fill="#333" />
                <path
                  d="M293.15,476.92H398.81a0,0,0,0,1,0,0v84.53A52.83,52.83,0,0,1,346,614.28h0a52.83,52.83,0,0,1-52.83-52.83V476.92a0,0,0,0,1,0,0Z"
                  opacity="0.1" />
                <path
                  d="M296.5,473h99a3.35,3.35,0,0,1,3.35,3.35v81.18A52.83,52.83,0,0,1,346,610.37h0a52.83,52.83,0,0,1-52.83-52.83V476.35A3.35,3.35,0,0,1,296.5,473Z"
                  fill="#fdb797" />
                <path d="M544.34,617.82a152.07,152.07,0,0,0,105.66.29v-13H544.34Z" transform="translate(-251 -101)"
                  opacity="0.1" />
                <circle cx="346.37" cy="372.44" r="151.45" fill="#fdb797" />
                <path d="M489.49,335.68S553.32,465.24,733.37,390l-41.92-65.73-74.31-26.67Z"
                  transform="translate(-251 -101)" opacity="0.1" />
                <path d="M489.49,333.78s63.83,129.56,243.88,54.3l-41.92-65.73-74.31-26.67Z"
                  transform="translate(-251 -101)" fill="#333" />
                <path
                  d="M488.93,325a87.49,87.49,0,0,1,21.69-35.27c29.79-29.45,78.63-35.66,103.68-69.24,6,9.32,1.36,23.65-9,27.65,24-.16,51.81-2.26,65.38-22a44.89,44.89,0,0,1-7.57,47.4c21.27,1,44,15.4,45.34,36.65.92,14.16-8,27.56-19.59,35.68s-25.71,11.85-39.56,14.9C608.86,369.7,462.54,407.07,488.93,325Z"
                  transform="translate(-251 -101)" fill="#333" />
                <ellipse cx="194.86" cy="372.3" rx="14.09" ry="26.42" fill="#fdb797" />
                <ellipse cx="497.8" cy="372.3" rx="14.09" ry="26.42" fill="#fdb797" />
              </svg>
              </div>
             
  
            </div>
            
          </button>

        </div>
      </div>




    </div>


  </nav>