<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Inicio
            <small>Panel de control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Dashboard</a></li>
        </ol>
    </section>
    <section class="content">


        <div class="box">
            <div class="box-header" style="height: 45px ;">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        Agregar nuevo administrador
                    </button>
                </div>
            </div>
            <div class="box-body">
                <form action="inicio" method="post">
                    <div class="box-body">
                        <!-- nombre -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
                            </div>
                        </div>
                        <!-- usuario -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar un nombre de usuario" required>
                            </div>
                        </div>
                        <!-- contraseña -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="nuevaContrasena" placeholder="Ingrese una contraseña" required>
                            </div>
                        </div>
                        <!-- repetir contraseña -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="repetirContrasena" placeholder="Repita la contraseña" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">Registrar administrador</button>
                    <?php
                    var_dump($_POST);
                    $crearUsuario = new ControladorAdministradores();
                    $crearUsuario->guardarUsuario();
                    ?>
                </form>
            </div>
            <div class="box-footer">
                Footer
            </div>
        </div>
    </section>
</div>