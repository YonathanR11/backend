<?php

class ControladorUsuario
{
    //METODO DEL LOGIN
    public static function ctrLoginUsuario()
    {
        if (isset($_POST['username'])) {
            $tabla = "usuarios";
            $item = "usuario";
            $valor = $_POST["username"];

            $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

            if ($respuesta["usuario"] == $_POST["username"] && 
            $respuesta["pass"] == $_POST["password"]) {
                $_SESSION["iniciarSesion"] = "ok";
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["nombre"] = $respuesta["nombre"];
                $_SESSION["usuario"] = $respuesta["usuario"];

                echo '<script>
                    window.location = "Inicio"
                    </script>';

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> ¡Usuario o contraseña incorrectos!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span class="fa fa-times"></span>
                </button>
                </div>' ;
            }
        }
    }
}
