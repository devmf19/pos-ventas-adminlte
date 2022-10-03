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
            <div class="box-header with-border" style="display: flex;">
                <div style="width: 30%;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAdmin">
                        Agregar
                    </button>
                </div>

                <div style="width: 70%; display: flex; justify-content: flex-end;">
                    <div>
                        <form action="post">
                            <div style="display: flex;">
                                <input type="text" class="form-control col-xs-5" name="buscarNombre" placeholder="Ingrese un nombre" required>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped tablas">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td width=10%></td>
                        <td></td>
                        <td></td>
                        <td width=28%>
                            <div>
                                <button class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tbody>
                </table>
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