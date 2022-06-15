<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>INVENTORY SYSTEM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!--PLUGINS DE CSS-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  
  <!--PLUGINS DE JAVASCRIPT-->
  
  
  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick-->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
 </head>


<!--CUERPO-->


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

<!-- Site wrapper -->
  <?php

    if(isset($_SESSION["iniciada"]) && $_SESSION["iniciada"] == "ok")
      logged();
    else
      include "vistas/modulos/login.php";
  
  ?>

  <script src="vistas/js/plantilla.js"></script>
</body>
</html>


<?php

  function logged()
  {
    echo '<div class="wrapper">';
    include "vistas/modulos/cabecera.php";
    include "vistas/modulos/menu.php";
    
    if(isset($_GET["ruta"]))
    {
      if($_GET["ruta"]=="inicio"||
      $_GET["ruta"]=="usuarios"||
      $_GET["ruta"]=="categorias"||
      $_GET["ruta"]=="productos"||
      $_GET["ruta"]=="clientes"||
      $_GET["ruta"]=="ventas"||
      $_GET["ruta"]=="crear-venta"||
      $_GET["ruta"]=="reportes"||
      $_GET["ruta"]=="salir")

        include "vistas/modulos/".$_GET["ruta"].".php";
      else
        include "vistas/modulos/404.php";
    
    }else{
      include "vistas/modulos/inicio.php";
    }


    include "vistas/modulos/footer.php";
    echo '</div>';
  }
  function notLogged()
  {

  }
  ?>