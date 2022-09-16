<?php
include_once "../../Config/core.php";


class Producto extends Core{
    // public $core;
    // public function getCore(){
    //     include_once "../../Config/Core.php";
    //     $this->core = new Core();
    //     return $this->core;
    // }
    public function producto(){
        // @session_start();
		$data['page_functions_js'] = "functions_producto.js";

        include_once "../../views/producto/Producto.php";
        
    }

    public function visualizarProducto(){
        extract($_POST);
        $sqlProduct = $this->select_all("SELECT * FROM producto WHERE codigo = $codigo");
        include_once "../../views/producto/view.VerProducto.php";
           
    }

    public function viewEditarProducto(){
        extract($_POST);
        $sqlProduct = $this->select_all("SELECT * FROM producto WHERE codigo = $codigo");
        include_once "../../views/producto/view.EditProducto.php";
    }

    public function modalSearchProduct(){
        include_once "../../views/producto/view.modalSearchProduct.php";
    }

    public function listProducto(){
        extract($_POST);
        // var_dump($_POST);
        $datos = array(); 
        $condicion = "";

        if($codigo != ""){ $condicion .="AND codigo LIKE '$codigo%'";}

        if($producto != ""){ $condicion .="AND producto LIKE '$producto%'"; }

        if($estado != ""){ if($estado == 'T'){ $estado = null;}}

        $sql = "SELECT codigo, producto, estado, cantidad, precio, descripcion  FROM producto WHERE estado LIKE '%$estado%' $condicion";

        $listProduct =  $this->select_all($sql);

        foreach ($listProduct as $list) {
            array_push($datos,
            array(
                "codigo" => $list["codigo"],
                "producto" => $list["producto"],
                "estado" => $list["estado"],
                "cantidad" => $list["cantidad"],
                "precio" => $list["precio"],
                "descripcion" => $list["descripcion"],
                "btnVer" => '<button type="button" class="text-white btn btn-info" id="verProductoVista"><i class="fa fa-eye"></i></button>',
                "btnEditar" => '<button type="button" class="text-white btn btn-warning" id="viewEditarProducto"><i class="fa fa-edit"></i></button>'

            ));
        }
            $table = array("data" => $datos);
            echo json_encode($table);
    }

    public function crearProducto() {
       
        
        extract($_POST);
        // var_dump($_POST);
        $codigo_producto = $_POST["codigo"];
        $producto = $_POST["producto"];
        $valor =  $_POST["valor"];
        $cantidad =  $_POST["cantidad"];
        $descripcion =  $_POST["descripcion"];

       $sql= "INSERT INTO producto (codigo, producto) VALUES  (?,?)";	

       $arrData = array($codigo_producto, $producto);
       $sql = $this->insert($sql, $arrData);
    
       
       if ($sql) {  $respuesta["tipoRespuesta"] = true; } 
        echo json_encode($respuesta);  
    }
    public function editarProducto() {
        extract($_POST);
        // var_dump($_POST);
        $respuesta = array();

    //    $actualizarProducto = $this->update("UPDATE producto SET Product ='$producto', Price = '$valor', cantidad = '$cantidad', descripcion = '$description' WHERE codigo_producto='$codigo_producto'");	
        $sql = "UPDATE producto SET producto ='$product', precio = '$price', cantidad = '$amount', descripcion = '$description' WHERE codigo='$code_product'";
       $actualizarProducto = $this->select($sql);	
    
        // if ($actualizarProducto) {  $respuesta["tipoRespuesta"] = true; }
        // echo json_encode($respuesta);  
          $respuesta["tipoRespuesta"] = true; 
        echo json_encode($respuesta);  
    }
    

    public function borrarProducto() {
        // $this->getCore(); 
        extract($_POST);
        $respuesta = array();

        $sql = "DELETE FROM producto WHERE codigo='$codigo'";
        $borrarProducto = $this->delete($sql);
        if ($borrarProducto) { $respuesta["tipoRespuesta"] = true;  }
        
        echo json_encode($respuesta); 
    }
}