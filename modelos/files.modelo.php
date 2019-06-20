<?php
require_once "conexion.php";

class ModeloFiles
{
    //METODO PARA SUBIR ARCHIVO
    // INSERT INTO 'galeria'.'fotos' ('titulo', 'descripcion', 'ruta', 'usuarios_id') VALUES ('titulo', 'descripcion', 'ruta', '1');
    public static function MdlSubirFoto($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (titulo, descripcion, ruta, usuarios_id) 
        VALUES (:titulo, :descripcion, :ruta, :user)");

        $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
        $stmt->bindParam(":user", $datos["user"], PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r($stmt->errorInfo());
            return "error";

        }
        $stmt->close();
        $stmt = null;
    }
}