<?php
require_once 'conexion.php';

class Administrador
{
    // usuario y contraseña son correctos
    static public function iniciarSesion($usuario)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador WHERE usuario = ? and contrasena = ?");
        $stmt->bindParam(1, $usuario["usuario"]);
        $stmt->bindParam(2, $usuario["contrasena"]);

        if ($stmt->execute()) {
            return $stmt->fetch();
        } else {
            return false;
        }
    }

    // consultar usuario existente
    static public function consultarUsuario($usuario)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador WHERE usuario = ?");
        $stmt->bindParam(1, $usuario);

        if ($stmt->execute()) {
            return $stmt->fetch();
        } else {
            return false;
        }
    }

    // mostrar todos los usuarios
    static public function mostrarTodos()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador");

        if ($stmt->execute()) {
            return $stmt;
        } else {
            return false;
        }
    }
    
    // registrar un usuario nuevo
    static public function registrarUsuario($datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO administrador (nombre, usuario, contrasena) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $datos["nombre"]);
        $stmt->bindParam(2, $datos["usuario"]);
        $stmt->bindParam(3, $datos["contrasena"]);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}
