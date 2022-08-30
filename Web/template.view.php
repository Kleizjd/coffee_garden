<?php @session_start(); include_once "../Config/Config.php"; require_once("../Helpers/Helpers.php");
// include_once "../../config/env.php"; 
?>
<?php if (isset($_SESSION["id_usuario"])):  ?>
<?php include_once "./partials/head.php"; ?>
<body class="bg-light">

  <div class="wrapper">
    <!-- HEADER -->
    <?php 

    include_once "./partials/header.php";
    ?>
    <!-- HEADER -->
    <!-- SIDEBAR -->
    <?php include_once "./partials/left_sidebar.php"; ?>
    <!-- !SIDEBAR -->
    <!-- CONTENT -->
    <!--------------Ajax-------------------->
    <?php
    //Se usa esta condición para navegar entre las pestañas de la vista inicial
      $page  = isset($_GET['p']) ? strtolower($_GET['p']) : 'dashboard';
      if ($page  == 'dashboard') {
        require_once '../views/dashboard/' . $page . '.php';
      } else {

        require_once '../views/' . $page . '.php';
      }
      ?>
    <!--------------!Ajax-------------------->
    <!-- !CONTENT -->
    <!-- FOOTER -->
    <footer>
      <?php include_once "./partials/footer.php"; ?>
    </footer>
    <!-- SCRIPTS -->
    <div id="scripts">
      <?php include_once "./partials/scripts.php";  ?>
    </div>
    <!-- !SCRIPTS -->

</body>
</html>


<!-- SE REDIRIGE AL LOGIN SI NO HA INICIADO SESIÓN -->
<?php else: header("Location: ../");?>
<?php endif;?>