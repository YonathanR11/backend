<?php

class ControladorFiles
{
    //METODO PARA SUBIR LOS ARCHIVOS
    public static function ctrUpFiles()
    {
        if (isset($_POST['titulo'])) {
            $tabla = "fotos";
            // $ruta = $_POST["ruta"];
            $dir_subida = 'vistas/assets/images/img/';
            $fichero_subido = $dir_subida . basename($_FILES['inputGroupFile02']['name']);
            if (move_uploaded_file($_FILES['inputGroupFile02']['tmp_name'], $fichero_subido)) {
                $ruta = $fichero_subido;
            }else{
                $ruta = "Sin ruta";
            }
            $datos = array(
            "titulo" => $_POST["titulo"],
            "descripcion" => $_POST["descripcion"],
            "ruta" => $ruta,
            "user" => $_SESSION["id"]
            );

            $respuesta = ModeloFiles::MdlSubirFoto($tabla, $datos);

            if ($respuesta == "ok") {
                echo "<script>
                Swal.fire({
                    position: 'top',
                    type: 'success',
                    title: '¡Subido Correctamente!',
                    showConfirmButton: false,
                    timer: 1800
                  }).then((result)=>{
                            window.location = 'Galeria';
                     });
                  </script>";
            }else{
                echo '<script>
				   Swal.fire({
						type: "error",
                       title: "¡Error!",
                       text: "¡No se pudo subir el archivo!\n "'+ $respuesta + ' Ruta: '+ $ruta +',
					   showConfirmButton: true,
					   confirmButtonText: "Cerrar"
				   }).then((result)=>{
					   if(result.value){
						   window.location = "Galeria";
					   }
					   });
				 </script>';
            }
        }
    }
}