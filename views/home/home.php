<?php //header("Status: 301 Moved Permanently"); header("Location: 301 Moved Permanently");
 ?>

<?php
// session_start();
include_once "Config/Config.php";
include_once "App/lib/Helpers.php"; ?>


<?php //else : ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- STYLES -->
  <link rel="stylesheet" href="public/my_js_css/css/style.css">
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="./vendor/sweetalert/css/sweetalert2.min.css">
  <link rel="stylesheet" href="./public/css/login_register.css">
  <!-- <link rel="shortcut icon" href="public/img/favicon/logo.png" type="image/x-icon"> -->
  <link rel="shortcut icon" href="<?= base_url() ?>/public/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="./public/css/style.css">

  <title>Coffee Garden</title>
</head>

<body>
  <!-- Header -->
  <div class="header">
  <!-- SIDE_BAR -->
  <div ><?php include_once "../login/login.php" ?></div>
  <!-- <div id="cargarVista"><?php include_once "App/ajax.php"; ?></div> -->
  <!-- !SIDE_BAR -->
</body>

</html>
<!-- SCRIPTS -->
<?php include_once "partials/scripts.php"; ?>
<script src="./vendor/moment/moment-with-locales.min.js"></script>
<script src="./vendor/sweetalert/js/sweetalert2.min.js"></script>
<!-- \\SCRIPTS -->
<?php //endif; ?>