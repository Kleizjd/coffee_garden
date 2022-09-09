<?php
include_once "../../Config/core.php";
// include_once "Utilities/Utilities.controller.php";


class Perfil extends Core
{
    public function perfil()
    {
        extract($_POST);
        $ruta = "../../views/perfil/Files/";
        $sqlAdmin = "SELECT * FROM usuarios WHERE id_usuario = '$userId' ";
        $Admin = $this->select($sqlAdmin);

        include_once "../../views/Perfil/Perfil.view.php";
    }
    public function loadImageUser()
    {
        extract($_POST);
        $answer = array();
        $ruta = "../../../views/Admin/Files/";
        $sqlUser = "SELECT imagen_usuario FROM usuarios WHERE id_usuario = '$userId' ";
        $User = $this->select($sqlUser);
        $row = $User->fetch_assoc();
        $answer["address"] = $row['imagen_usuario'];

        // echo json_encode($answer);
    }
    public function editEmail()
    {
        extract($_POST);
        $answer = array();

        $sql = "UPDATE usuarios SET email = ? WHERE id_usuario = $userId";

        $arrData = array($actualiza_correo);
        $request = $this->update($sql, $arrData);

        if ($request != 0) {
            unset($_SESSION['correo_login']);
            $_SESSION['correo_login'] = $actualiza_correo;
            $answer['tipoRespuesta'] = "success";
        }
        echo json_encode($answer);
    }
    public function editPassword()
    {
        extract($_POST);
        // $tipoRespuesta = "error";
        // $message = "la contrasena actual no es correcta";

        $sqlVerify = "SELECT password FROM usuarios WHERE id_usuario = '$userId'";
        $sql = $this->select($sqlVerify);

        if ($sql != 0) {
            
            $passwordDB = $sql['password'];

            if (password_verify($actual_password, $passwordDB)) {

                if ($new_password == $confirm_password) {

                    //Encriptar-----------------------------------------------------------------------
                    $passEncrypt = password_hash($new_password, PASSWORD_DEFAULT); //password encripted
                    //-------------------------------------------------------------------------------/contraseña encriptada

                    $sqlUpdate = "UPDATE usuarios SET password = ? WHERE id_usuario = '$userId'";
                    $arrData = array($passEncrypt);
                    $request = $this->update($sqlUpdate, $arrData);
            
                    if ($request != 0) {

                        $tipoRespuesta = "success";
                        $message = "Cambio de contraseña exitoso";
                    }
                } else {
                    $tipoRespuesta = "warning";
                    $message = " las contraseñas no coiciden";
                }
            }
        }
        echo json_encode(array("tipoRespuesta" => $tipoRespuesta, "message" => $message));
    }
    public function editName()
    {
        extract($_POST);
        $sql = "UPDATE usuario SET nombres = '$name_user', apellidos = '$lastName' WHERE correo = '$email' ";
        $sqlUser = $this->select($sql);

        $sql = "SELECT * FROM usuario WHERE correo = '$email' ";
        $sqlUser = $this->select($sql);

        $row = $sqlUser->fetch_assoc();
        $nombre = $row['nombres'];
        $apellido = $row['apellidos'];

        $tipoRespuesta = "success";
        echo json_encode(array('tipoRespuesta' => $tipoRespuesta, 'message' => 'Nombre Cambiado exitosamente', 'nombre' => $nombre, 'apellido' => $apellido));
    }

    public function listUsers()
    {
        extract($_POST);
    }
    public function editUser()
    {
        extract($_POST);
    }
}
