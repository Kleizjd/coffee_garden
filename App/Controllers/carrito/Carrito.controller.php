<?php
include_once "../../Config/core.php";
class Carrito extends Core{
    
    public function carrito(){
        extract($_POST);
        $cantidad = "SELECT COUNT(producto) AS cantidad, SUM(c.cantidad  * precio ) AS total FROM producto,carrito c WHERE codigo = codigo_producto AND email='".$_SESSION['correo_login']."'";
        $listCantidad =  $this->select($cantidad);
        $sql = "SELECT codigo, c.cantidad, ct.nombre, producto, p.precio, c.cantidad * precio AS total_producto FROM carrito c,producto p, categorias ct WHERE email='".$_SESSION['correo_login']."' AND c.codigo_producto = p.codigo AND p.categoria = ct.id";
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
    public function eliminaDelCarrito() {
        extract($_POST);
        // var_dump($_POST);

        $sql= "DELETE FROM carrito WHERE email='$correo' AND codigo_producto = '$id'";
        $request = $this->delete($sql);
        $total= "SELECT  SUM(c.cantidad  * precio ) AS total FROM carrito c, producto p WHERE codigo = codigo_producto AND email='$correo'";
        $requestTotal = $this->select($total);


        $respuesta["tipoRespuesta"] = true;
        $respuesta["total"] = $requestTotal['total'];
        echo json_encode($respuesta);

    }
 
}