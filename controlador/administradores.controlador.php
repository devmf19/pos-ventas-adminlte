<?php

class ControladorAdministradores
{
    // solicitud para iniciar sesion
    static public function strIngresoUsuario()
    {
        if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            $rta = Administrador::mostrarUsuarios($usuario, $contrasena);

            if ($rta !== false) {
                $_SESSION['iniciarSesion'] = "ok";
                echo '<script>
                        window.location = "inicio";
                    </script>';
            } else {
                echo '<br><br> <div class="alert alert-danger">Datos incorrectos, vuelva a intentarlo</div>';
            }
            $rta = null;
        }
    }

    // solicitud para guardar registrar un nuevo administrador en la base de datos
    static public function guardarUsuario()
    {
        if (
            isset($_POST['nuevoNombre']) &&
            isset($_POST['nuevoUsuario']) &&
            isset($_POST['nuevaContrasena']) &&
            isset($_POST['repetirContrasena'])
        ) {
            if (
                // se aceptan todos estos caracteres en el nombre del usuario
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevaContrasena"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["repetirContrasena"])
            ) {
                // si las contraseñas no coinciden
                if (strcmp($_POST['nuevaContrasena'], $_POST['repetirContrasena']) != 0) {
                    // echo ControladorAdministradores::mensajeExito();
                    echo ControladorAdministradores::mensajeError("Las contraseñas no coinciden");
                } else {
                    $usuario = $_POST['nuevoUsuario'];
                    $rta = Administrador::consultarUsuario($usuario);

                    // si el usuario existe en la base de datos
                    if ($rta != null) {
                        echo ControladorAdministradores::mensajeError("El usuario que intenta registrar ya existe en la base de datos, por favor cree un nuevo usuario");
                    } else {
                        // se toman los datos y se almacenan en la base de datos
                        $nombre = $_POST['nuevoNombre'];
                        $contrasena = $_POST['nuevaContrasena'];
                        $rta = Administrador::registrarUsuario($nombre, $usuario, $contrasena);
                        echo ControladorAdministradores::mensajeExito();
                    }
                }
            } else {
                // usuario o contraseña contienen caracteres especiales
                echo ControladorAdministradores::mensajeError("No puede usar caracteres especiales para el usuario o la contraseña");
            }
        }
    }

    static public function mensajeExito()
    {
        return '<script>
                    Swal.fire(
                        "Buen trabajo",
                        "Usuario registrado correctamente",
                        "success"
                    ).then((result)=>{
                        if(result.value){
                            window.location = "administradores"
                        }
                    });
                </script>';
    }
    static public function mensajeError($mensaje)
    {
        return '<script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "'.$mensaje.'"
          }).then((result)=>{
                        if(result.value){
                            window.location = "administradores"
                        }
                    });
                </script>';
    }
}
