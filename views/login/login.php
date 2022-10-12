  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('./public/img/bg_notice.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-9">
            <h3>Ingresar a <strong>Coffee Garden</strong></h3>
            <p class="mb-4">Las Productos son nuestra razon de ser.</p>
            <form id="login_form" method="post" autocomplete="off">
              <div class="form-group ">
                <input type="text" class="form-control" placeholder="Login" name="user" id="user" autofocus required>
              </div>
              <div class="input-group form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>

                <button type="button" class="btn btn-outline-primary showPassword">
                  <i class="fas fa-eye"></i>
                </button>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-12">
                    <input type="submit" id="login" class="form-control btn btn-primary" value="Iniciar Sesión">
                  </div>
                </div>
              </div>


              <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                  No tienes cuenta? <a id="to_register" class="text-info m-l-5"><b>Registrate</b></a>
                </div>
              </div>
              <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                  <span class="ml-auto"><a href="#" id="resetByEmail" class="forgot-pass">Olvidaste tu contraseña?</a></span>
                </div>
              </div>
            </form>

            <!--[ REGISTRAR USUARIO ]-->
            <form id="create_account" method="POST" autocomplete="off" class="overflow-auto" style="display: none">
              <div id="register_users" class="animate form registration_form">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Correo" id="email" required />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre" id="nombre" required />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Apellido" id="apellido" required />
                </div>
                <div class="input-group form-group">
                  <input type="password" class="form-control" placeholder="Contrase&ntilde;a" id="password_user" required />
                  <button type="button" class="btn btn-outline-primary showPassword">
                    <i class="fas fa-eye"></i>
                  </button>
                </div>
                <div class="input-group form-group">
                  <input type="password" class="form-control" placeholder="Validar Contrase&ntilde;a" required id="password_verify" />
                  <button type="button" class="btn btn-outline-primary showPassword">
                    <i class="fas fa-eye"></i>
                  </button>
                </div>
                <div id="pregunta_segura" style="display: none" class="">
                  <!--[ PREGUNTA DE SEGURIDAD ]-->
                  <div class="form-group">
                    <h4>PREGUNTA DE SEGURIDAD</h4>
                  </div>
                  <div class="form-group">
                    <select name="pregunta" id="pregunta" class="custom-select" required>
                      <option selected value="">Seleccione...</option>
                      <option value="1">cual fue el nombre de su primera mascota?</option>
                      <option value="3">lugar de nacimiento?</option>
                      <option value="4">color favorito?</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control border border-primary rounded" placeholder="Respuesta" id="respuesta" required />
                  </div>
                  <!--[ !PREGUNTA DE SEGURIDAD ]-->
                  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </div>

                <button type="button" id="next" class="btn btn-primary btn-block">Siguiente</button>

                <div class="separator">
                  <p class="change_link">Ya estas Registrado ?
                    <a href="#signin" class="panel_join"> Ingresa </a>
                  </p>

                  <div>
                    <span> &copy;Copyright <?= date("Y"); ?> Aunar Papper</span>
                  </div>
                </div>
            </form>
            <!--[ !REGISTRAR USUARIO ]-->
          </div>
        </div>
      </div>
    </div>


  </div>
  <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
  <script src="vendor/sweetalert/js/sweetalert2.min.js"></script>
  <script src="public/js/login.js"></script>