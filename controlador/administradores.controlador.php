<?php

class ControladorAdministradores
{
    //metodo para iniciar sesion
    static public function strIngresoUsuario()
    {
        if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            // eccriptación de contraseña
            $saltSHA256 = '$5$rounds=5000$usesomesillystringforsalt$';
            $contrasena = crypt($_POST['contrasena'], $saltSHA256);

            $usuario = array(
                "usuario" => $_POST["usuario"],
                "contrasena" => $contrasena
            );

            $rta = Administrador::iniciarSesion($usuario);

            if ($rta !== false) {
                $_SESSION['iniciarSesion'] = "ok";
                $_SESSION['id'] = $rta['id'];
                $_SESSION['nombre'] = $rta['nombre'];
                $_SESSION['usuario'] = $rta['usuario'];

                echo '<script>
                        window.location = "inicio";
                    </script>';
            } else {
                echo '<br><br> <div class="alert alert-danger">Datos incorrectos, vuelva a intentarlo</div>';
            }
            $rta = null;
        }
    }

    //metodo para guardar registrar un nuevo administrador en la base de datos
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
                    $rta = Administrador::consultarUsuario($_POST['nuevoUsuario']);
                    // si el usuario existe en la base de datos
                    if ($rta != null) {
                        echo ControladorAdministradores::mensajeError("El usuario que intenta registrar ya existe en la base de datos, por favor cree un nuevo usuario");
                    } else {
                        // eccriptación de contraseña
                        $saltSHA256 = '$5$rounds=5000$usesomesillystringforsalt$';
                        $contrasena = crypt($_POST['nuevaContrasena'], $saltSHA256);
                        // se toman los datos y se almacenan en la base de datos
                        $datos = array(
                            "nombre" => $_POST['nuevoNombre'],
                            "usuario" => $_POST['nuevoUsuario'],
                            "contrasena" => $contrasena
                        );
                        $rta = Administrador::registrarUsuario($datos);
                        if ($rta == "ok") {
                            echo ControladorAdministradores::mensajeExito();
                        }
                    }
                }
            } else {
                // usuario o contraseña contienen caracteres especiales
                echo ControladorAdministradores::mensajeError("No puede usar caracteres especiales para el usuario o la contraseña");
            }
        }
    }

    // metodo que muestra todos los usuarios de la base de datos en la tabla
    static public function mostrarTodos()
    {
        $rta = Administrador::mostrarTodos();
        if ($rta != false) {
            $i = 0;

            // se recorren todos los elemeentos del array obtenido de la base de datos y que contiene todos los usuarios
            foreach ($rta as $usuario) {
                $i++;
                // por cada usuario del vector se inserta una fila en la tabla que contenga su información
                echo '
                    <tr role="row">
                        <td>' . $i . '</td>
                        <td>' . $usuario["nombre"] . '</td>
                        <td>' . $usuario["usuario"] . '</td>
                        <td>
                            <div style="display: flex; justify-content: space-around;">
                                <button class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                ';
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
            text: "' . $mensaje . '"
          }).then((result)=>{
                        if(result.value){
                            window.location = "administradores"
                        }
                    });
                </script>';
    }
}
