<?php
require_once 'conexion.php';

class Administrador
{
     static public function mostrarUsuarios($usuario, $contrasena)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador WHERE usuario = ? and contrasena = ?");
        $stmt->bindParam(1, $usuario);
        $stmt->bindParam(2, $contrasena);

        $stmt->execute();
        return $stmt -> fetch();
    }
}
