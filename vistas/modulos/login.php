<div id="back"></div>
<div class="login-box">
        <div class="login-logo">
            <img src="vistas/img/wellcome.png" width="200" height="150">
        </div>


        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="post">


                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>


                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="ingPassword" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>


                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>

                <?php
                    require "controladores/ingresoUsuario.controlador.php";
                    $login = new ControladorIngresoUsuarios();
                    $login -> ctrIngresoUsuario();
                ?>
            </form>
        </div>
    </div>