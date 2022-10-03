<?php

class ControladorUsuarios
{
    public function strIngresoUsuario()
    {
        if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $rta = Administrador::mostrarUsuarios($usuario, $contrasena);
                
                if($rta !== false) {
                    $_SESSION['iniciarSesion'] = "ok";
                    echo '<script>
                        window.location = "inicio";
                    </script>';
                } else {
                    echo'<br><br> <div class="alert alert-danger">Datos incorrectos, vuelva a intentarlo</div>';
                }
            
        }
    }
}
