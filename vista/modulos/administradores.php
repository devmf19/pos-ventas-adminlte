<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Administradores del sistema
        </h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Administradores</li>
        </ol>
    </section>
    <section class="content">
        <div class="box collapsed-box">
            <div class="box-header" style="height: 45px ;">
                <h3 class="box-title">Nuevo administrador</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <!-- Agregar nuevo administrador -->
                        <i class="fa fa-plus"></i>
                </div>
            </div>
            <div class="box-body">
                <form action="administradores" method="post">
                    <div class="box-body">
                        <!-- nombre -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingrese un nombre" required>
                            </div>
                        </div>
                        <!-- usuario -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingrese un nombre de usuario" required>
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
                    $crearUsuario = new ControladorAdministradores();
                    $crearUsuario->guardarUsuario();
                    ?>
                </form>
            </div>
        </div>
        <!-- tabla -->
        <div class="box">
            <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap">
                    <br>
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped dataTable tablas" role="grid">
                            <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $mostrarTodos = new ControladorAdministradores();
                                $mostrarTodos->mostrarTodos();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>