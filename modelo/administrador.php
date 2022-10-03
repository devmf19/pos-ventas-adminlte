<?php
require_once 'conexion.php';

class Administrador
{
    // mostrarUsuarios desde la base de datos
     static public function mostrarUsuarios($usuario, $contrasena)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador WHERE usuario = ? and contrasena = ?");
        $stmt->bindParam(1, $usuario);
        $stmt->bindParam(2, $contrasena);

        $stmt->execute();
        return $stmt -> fetch();
    }

    // consultar usuario existente
    static public function consultarUsuario($usuario)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador WHERE usuario = ?");
        $stmt->bindParam(1, $usuario);

        $stmt->execute();
        return $stmt -> fetch();
    }

    static public function registrarUsuario($nombre, $usuario, $contrasena){
        $stmt = Conexion::conectar()->prepare("INSERT INTO administrador (nombre, usuario, contrasena) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $usuario);
        $stmt->bindParam(3, $contrasena);

        $stmt->execute();
    }
}
