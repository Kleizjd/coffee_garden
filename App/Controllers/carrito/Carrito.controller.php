<?php
include_once "../../Config/core.php";

class Carrito extends Core{
    
    public function carrito(){
        $sql = "SELECT * FROM carrito";
        $listProducto =  $this->select_all($sql);
        include_once "../../views/carrito/carrito.php";
        
    }
 
}