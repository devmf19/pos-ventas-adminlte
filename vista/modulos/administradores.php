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
        <div class="box">
            <!-- header -->
            <div class="box-header">
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAdmin">
                        Agregar nuevo administrador
                    </button>
                </div>
            </div>
            <!-- body -->
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

<!-- MODAL AGREGAR USUARIO -->

<div class="modal fade" id="modalAgregarAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" action="post" enctype="multipart/form-data">
                    <div class="modal-header" style="background: #3c8dbc; color: #fff;">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff; opacity: 1;">&times;</button>
                        <h4 class="modal-title">Agregar nuevo administrador</h4>
                    </div>
                    <div class="modal-body">
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
                                    <input type="password" class="form-control input-lg" name="nuevaContraseña" placeholder="Ingrese una contraseña" required>
                                </div>
                            </div>
                            <!-- repetir contraseña -->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control input-lg" name="repetirContraseña" placeholder="Repita la contraseña" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">Registrar administrador</button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>