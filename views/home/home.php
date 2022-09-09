<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- STYLES -->
    <!-- <script src="vendor/jquery/jquery.slim.min.js"></script> -->
    <link rel="stylesheet" href="public/my_js_css/css/style.css">
    <!-- Owl-Carousel-CSS -->
    <!-- <link rel="stylesheet" href="public/my_js_css/css/owl.carousel.css" type="text/css" media="all" /> -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Popup-Box-CSS -->
    <!-- <link rel="stylesheet" href="public/my_js_css/css/popuo-box.css" type="text/css" media="all" /> -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="vendor/sweetalert/css/sweetalert2.min.css">
    <link rel="stylesheet" href="./public/css/login_register.css">

    <link rel="shortcut icon" href="public/img/favicon/logo.png" type="image/x-icon">
    <title>Coffee Garden</title>

</head>

<body>

    <!-- Header -->
    <div>
        <div class="header">
            <!-- Navbar -->
            <?php include_once "partials/navbar.php" ?>
            <!-- //Navbar -->
        </div>

        <!-- BODY -->
        <?php
        //Se usa esta condición para navegar entre las pestañas de la vista inicial
        $page  = isset($_GET['p']) ? strtolower($_GET['p']) : 'main';
        if ($page  == 'main') {
            require_once 'views/home/' . $page . '.php';
        } else {
            require_once 'views/' . $page . '.php';
        }
        ?>
              <!-- SIDE_BAR -->
      <!-- <div class="col-12 d-md-flex">
        <div id="page-wrapper" class="p-5"><br>
          <div class="container-fluid" id="cargarVista" style="width: 74rem;">
            <?php //include_once "App/ajax.php"; ?>
          </div>
        </div> -->
      </div>
      <!-- !SIDE_BAR -->
        <!-- SCRIPTS -->
        <?php include_once "partials/scripts.php"; ?>
</body>

</html>
<script src="vendor/moment/moment-with-locales.min.js"></script>
<!-- <script type="text/javascript" src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> -->
<script src="vendor/sweetalert/js/sweetalert2.min.js"></script>
<!-- \\SCRIPTS -->