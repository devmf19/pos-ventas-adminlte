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
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        Agregar nuevo administrador
                    </button>
                </div>
            </div>
            <div class="box-body">
                <form action="administradores" method="post">
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
                                <td></td>
                                <td></td>
                                <td></td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>