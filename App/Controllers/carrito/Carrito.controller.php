<?php
include_once "../../Config/core.php";
session_start();
class Carrito extends Core{
    
    public function carrito(){
        extract($_POST);
        $sql = "SELECT * FROM carrito WHERE email='".$_SESSION['email']."'";
        $listProducto =  $this->select_all($sql);
        include_once "../../views/carrito/carrito.php";
        
    }
       //  CARRITO CREAR, ELIMINAR
       public function anadirAlCarrito()
       {   extract($_POST);
        // var_dump($_POST);

            $email = $_SESSION['correo_login'];
           $sql = "SELECT * FROM carrito WHERE email='$email'"; 
        //    $sql = "SELECT * FROM carrito WHERE  id_producto = '$id'"; 
           $sqlProducto =  $this->select($sql);
   
           if(!$sqlProducto){ 
               $sql = "INSERT INTO carrito(cantidad,email,codigo_producto) VALUES (?,?,?)"; 
               $arrData = array($cantidad,$email, $id);
               $request = $this->insert($sql, $arrData);
               $respuesta["tipoRespuesta"] = true;
   
           } else { 
               $sql = "DELETE FROM carrito WHERE email='$email' AND codigo_producto = '$id'";
               $request = $this->delete($sql);
               $respuesta["tipoRespuesta"] = false;
   
           }     
           echo json_encode($respuesta);
       }
 
}