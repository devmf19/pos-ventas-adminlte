<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Cervezas</b> Malagana</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Ingresar al sistema</p>

        <form action="inicio" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <!-- <label>
                            <input type="checkbox"> Recordar
                        </label> -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                </div>
                <?php
                    $login = new ControladorUsuarios();
                    $login -> strIngresoUsuario();
                ?>
            </div>
        </form>
        </div>

    </div>
</div>