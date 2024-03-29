<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="post" novalidate="">
                  <div class="form-group">
                    <label class="label">Usuario</label>
                    <div class="input-group">
                      <input type="text" name="username" class="form-control" placeholder="Usuario" autocomplete="off">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Contraseña</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="Contraseña"  autocomplete="off">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php
                        $login = new ControladorUsuario();
                        $login->ctrLoginUsuario();
                    ?>
                    <button type="summit" class="btn btn-primary submit-btn btn-block">Entrar</button>
                  </div>
                  
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Registrate</span>
                    <a href="register.html" class="text-black text-small">Aqui</a>
                  </div>
                </form>
              </div>
              
              
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>