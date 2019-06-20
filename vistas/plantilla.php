<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Galeria</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vistas/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vistas/assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="vistas/assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="vistas/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vistas/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vistas/assets/vendors/css/vendor.bundle.addons.css">
    
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="vistas/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="vistas/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <!-- <link rel="shortcut icon" href="vistas/assets/images/favicon.png" /> -->
    <!-- <link rel="stylesheet" href="vistas/assets/css/bootstrap.min.css"> -->
    <!-- sweetalert2 -->
    <script src="vistas/assets/js/sweetalert2.all.min.js"></script>
  </head>
  <body>
  

    <?php
    if (isset($_SESSION["iniciarSesion"]) 
    && $_SESSION["iniciarSesion"] == "ok") {
      
      include "modulos/header.php";

      echo '<div class="main-panel">
      <div class="content-wrapper">
        <div class="row page-title-header">';

      if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "Inicio" || 
            $_GET["ruta"] == "cerrarSesion" ||
            $_GET["ruta"] == "Galeria") {
          
              include "modulos/".$_GET["ruta"].".php";
            }else{
              include "modulos/404.php";
            }
            
            
          }else{
            include "modulos/Inicio.php";
          }
          
          echo '</div>';
          include "modulos/footer.php";
          
          echo '</div>
          </div>';
    }else{
      include "modulos/login.php";

    }

    ?>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vistas/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="vistas/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="vistas/assets/js/shared/off-canvas.js"></script>
    <!-- <script src="vistas/assets/js/shared/misc.js"></script> -->
    <script src="vistas/assets/js/jquery-3.4.1.min.js"></script>
    <script src="vistas/assets/js/popper.min.js"></script>
    <script src="vistas/assets/js/bootstrap.min.js"></script>
    <!-- <script src="vistas/assets/js/sweetalert2.all.min.js"></script> -->
    <script src="vistas/assets/js/server.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>