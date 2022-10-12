<?php
include_once "../../Config/core.php";

class Carrito extends Core{
    
    public function carrito(){
        // $sql = "SELECT * FROM producto ORDER BY  codigo DESC LIMIT 5";
        // $listProducto =  $this->select_all($sql);
        include_once "../../views/carrito/carrito.php";
        
    }
 
}