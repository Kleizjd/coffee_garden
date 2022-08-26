<?php
@session_start();
include_once "../../Config/Config.php";
include_once "../../Config/core.php";

$conexion = new Core();

if (!empty($_POST)) {
    if (!empty($_POST['funcion'])) {
        switch ($_POST['funcion']) {

            //======================================================================================\\
            //================================== CASE VALIDAR SESION =====================================\\
            //========================================================================================\\

            case "validar_sesion":
    
                
                if (!empty($_POST['id']) && !empty($_POST['password'])) {

                    $id = $_POST['id'];
                    $password = $_POST['password'];
                    $estado = "'A'";
           
                    $sql = "SELECT DISTINCT id_usuario, CONCAT(nombres, ' ', apellido1, ' ', apellido2) AS Nombre_Completo, password, rolid FROM usuarios WHERE id_usuario='$id' AND password='$password' AND estado_usuario = " . $estado . "";

                    $validar_sesion = $conexion->select($sql);  
                 
                    // $validar_sesion = $validar_sesion -> fetch(PDO::FETCH_BOTH);

                    if ($validar_sesion != 0) {
                        $_SESSION['nombreUsuario'] = str_replace("*","", $validar_sesion["Nombre_Completo"]);
                        $_SESSION["id_usuario"] = $validar_sesion["id_usuario"];
                        $_SESSION["rolid"] = $validar_sesion["rolid"];
                        $respuesta["tipoRespuesta"] = "success";
                    } else {
                        $respuesta["tipoRespuesta"] = "error";
                    }
                    // echo "session id: ".$_SESSION["id_usuario"]." session nombre: ".$_SESSION["nombreUsuario"];
                    echo json_encode ($respuesta);
                }
                break;

            //============================================================================================\\
            //================================== CASE CERRAR SESIÓN =============================================\\
            //=============================================================================================\\

            case "cerrarSesion":

                @session_start();
                @session_unset();
                @session_destroy();

                break;
        }
    }
}
