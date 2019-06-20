<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="Inicio">
      <img src="vistas/assets/images/logo.svg" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="Inicio">
      <img src="vistas/assets/images/logo-mini.svg" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:../../partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <!-- <div class="profile-image">
            <img class="img-xs rounded-circle" src="vistas/assets/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div> -->
          <div class="text-wrapper">
            <?php
            echo '<p class="profile-name">'.$_SESSION["nombre"].'</p>';
            ?>
            <p class="designation">Premium user</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="Galeria">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Galeria</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#modalSubirArchivo">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Subir foto</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrarSesion">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Cerrar sesion</span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="modal fade" id="modalSubirArchivo">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Subir Archivo</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <form role="form" method="post" enctype="multipart/form-data">
          <div class="modal-body">
          <div class="box-body">
            <!-- <div class="container">
              <div class="row">
                <div class="col"> -->

                    <div class="form-group">
                        <label for="titu">Titulo</label>
                        <input type="text" name="titulo" class="form-control" id="titu" placeholder="Titulo">
                      </div>
                    <div class="form-group">
                        <label for="descr">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="descr" placeholder="Descripcion">
                      </div>
                  <div class="custom-file mt-3">
                      <label for="inputGroupFile02">Descripcion</label>
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="inputGroupFile02" />
                    <label class="custom-file-label" for="inputGroupFile02">Seleccionar archivo...</label>
                  </div>


                <!-- </div>
              </div>
            </div> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Subir</button>
          </div>
            <?php
            $nuevoFilew = new ControladorFiles();
            $nuevoFilew -> ctrUpFiles2();
          ?>
          </div>
          
        </form>
      </div>
    </div>
  </div>