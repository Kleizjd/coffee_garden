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
                // var_dump($_POST);

                if (!empty($_POST['id']) && !empty($_POST['password'])) {

                    $id = $_POST['id'];
                    $password = $_POST['password'];
                    $estado = "'A'";

                    $sql = "SELECT DISTINCT id_usuario, CONCAT(nombre, ' ', apellido) AS Nombre_Completo, password, rolid FROM usuarios WHERE id_usuario='$id' AND password='$password' AND estado_usuario = " . $estado . "";

                    $validar_sesion = $conexion->select($sql);

                    // $validar_sesion = $validar_sesion -> fetch(PDO::FETCH_BOTH);

                    if ($validar_sesion != 0) {
                        $_SESSION['nombreUsuario'] = str_replace("*", "", $validar_sesion["Nombre_Completo"]);
                        $_SESSION["id_usuario"] = $validar_sesion["id_usuario"];
                        $_SESSION["rolid"] = $validar_sesion["rolid"];
                        $respuesta["tipoRespuesta"] = "success";
                    } else {
                        $respuesta["tipoRespuesta"] = "error";
                    }
                    // echo "session id: ".$_SESSION["id_usuario"]." session nombre: ".$_SESSION["nombreUsuario"];
                    echo json_encode($respuesta);
                }
                break;

                //============================================================================================\\
                //=================================[ crear cuenta de usuario ]=================================\\
                //=============================================================================================\\


            case "register_user":

                if (!empty($_POST['user_id']) && !empty($_POST['password_user']) && !empty($_POST['password_verify'])) {
                    // var_dump($_POST);

                    $id = $_POST['user_id'];
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $password = $_POST['password_user'];
                    $password_verify = $_POST['password_verify'];
                    $estado = "'A'";
                    if ($password === $password_verify) {
                        $sql = "SELECT id_usuario FROM usuarios WHERE id_usuario='$id'";
                        $sqlSelect = $conexion->select($sql);
                       

                        if ($sqlSelect == 0) {
                            $sql = "INSERT INTO usuarios(id_usuario, nombre, apellido, password, estado_usuario, rolid) VALUES (?,?,?,?,?,?)";
                            // $sql = "INSERT INTO usuarios(id_usuario, nombre, apellido, password, estado_usuario, rolid) VALUES (?,?,?,?,?,?)";
                            $arrData = array($id, $nombre, $apellido, $password, 'A', '2');
                            $sql = $conexion->insert($sql, $arrData);

                            $respuesta["tipoRespuesta"] = "success";
                        } else {
                            $respuesta["tipoRespuesta"] = "exist";
                        }
                        echo json_encode($respuesta);
                    } else {
                        $respuesta["tipoRespuesta"] = "error";
                    }
                    // echo "session id: ".$_SESSION["id_usuario"]." session nombre: ".$_SESSION["nombreUsuario"];
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
