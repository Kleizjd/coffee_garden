<?php
include_once "../../Config/core.php";
class Carrito extends Core{
    
    public function carrito(){
        extract($_POST);
        $cantidad = "SELECT SUM(c.cantidad) AS cantidad, SUM(c.cantidad  * precio ) AS total FROM producto,carrito c WHERE codigo = codigo_producto AND email='".$_SESSION['correo_login']."'";
        $listCantidad =  $this->select($cantidad);
        $sql = "SELECT c.cantidad, ct.nombre, producto, p.precio, c.cantidad * precio AS total_producto FROM carrito c,producto p, categorias ct WHERE email='".$_SESSION['correo_login']."' AND c.codigo_producto = p.codigo AND p.categoria = ct.id";
        $listProducto =  $this->select_all($sql);
        $sqlUser = "SELECT * FROM usuarios WHERE email='".$_SESSION['correo_login']."'";
        $listUsuario =  $this->select_all($sqlUser);

        include_once "../../views/carrito/carrito.php";
        
    }
       //  CARRITO CREAR, ELIMINAR
       public function anadirAlCarrito()
       {   
            session_start();
            extract($_POST);
        // var_dump($_POST);

            $email = $_SESSION['correo_login'];
            $sql = "SELECT * FROM carrito WHERE email='$email' AND codigo_producto='$id'"; 
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