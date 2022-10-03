<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cervezas Malagana</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vista/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vista/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="vista/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="vista/dist/css/skins/_all-skins.min.css">
    <!--  style -->
    <link rel="stylesheet" href="vista/dist/css/styles.css">
    <!-- data table -->
    <link rel="stylesheet" href="vista/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vista/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!-- jQuery 3 -->
    <script src="vista/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="vista/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="vista/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="vista/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="vista/dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="vista/plugins/datatables/jquery.dataTables.js"></script>
    <script src="vista/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="vista/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vista/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
    <!-- Site wrapper -->
    <?php
    if (
        isset($_SESSION['iniciarSesion']) &&
        $_SESSION['iniciarSesion'] == "ok"
    ) {
        echo ('<div class="wrapper">');

        include 'modulos/header.php';
        include 'modulos/menu.php';

        if (isset($_GET["ruta"])) {
            $ruta  = $_GET["ruta"];
            if (
                $ruta == "inicio" ||
                $ruta == "inventario" ||
                $ruta == "ventas" ||
                $ruta == "compras" ||
                $ruta == "clientes" ||
                $ruta == "administradores" ||
                $ruta == "salir"
            ) {
                include "modulos/" . $ruta . ".php";
            } else {
                include "modulos/404.php";
            }
        } else {
            include "modulos/inicio.php";
        }

        include 'modulos/footer.php';
        echo ('</div>');
    } else {
        include 'modulos/login.php';
    }

    ?>

    <script src="vista/js/plantilla.js"></script>

</body>

</html>