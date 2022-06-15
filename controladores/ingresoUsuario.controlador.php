<?php
    class ControladorIngresoUsuarios{

        public function ctrIngresoUsuario()
        {
            if(isset($_POST["ingUsuario"]) && isset($_POST["ingPassword"]))
            {
                $name = $_POST["ingUsuario"];
                $passw = $_POST["ingPassword"];

                if(preg_match('/[a-zA-Z0-9]/',$name) &&
                   preg_match('/[a-zA-Z0-9]/',$passw))
                {
                    $tabla = "usuario";
                    $item = "user";

                    $respuesta = ModeloUsuario::MdlMostrarUsuarios($tabla,$item,$name);

                    if($respuesta!=null)
                    if($respuesta["user"] == $_POST["ingUsuario"] && $respuesta["password"]==$_POST["ingPassword"])
                    {   echo "logueado";
                        $_SESSION["iniciada"] = "ok";
                        echo '<script>window.location = "inicio"</script>';
                    }
                    else
                        echo '</br><div class="alert-danger">Bro tu me estas intentando jakiar?</div>';
                    else
                        echo '</br><div class="alert-danger">miemano pusiste algo mal</div>';
                }
            }
        }

    }