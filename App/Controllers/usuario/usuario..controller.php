<?php
include_once "../../Config/core.php";


class Usuario extends Core{
    
    public function usuario(){

        include_once "../../views/usuario/usuario.php";
        
    }

    public function visualizarUsuario(){
        extract($_POST);
        $sqlProduct = $this->select_all("SELECT * FROM producto WHERE codigo = $codigo");
        include_once "../../views/producto/view.VerProducto.php";
           
    }

    public function viewEditarUsuario(){
        extract($_POST);
        $sqlProduct = $this->select_all("SELECT * FROM producto WHERE codigo = $codigo");
        include_once "../../views/producto/view.EditProducto.php";
    }

    public function modalSearchProduct(){
        include_once "../../views/producto/view.modalSearchProduct.php";
    }

    public function listUsuarioo(){
        extract($_POST);
        var_dump($_POST);
        $datos = array(); 
        $condicion = "";

        if($codigo != ""){ $condicion .="AND id_usuario LIKE '$codigo%'";}

        if($producto != ""){ $condicion .="AND id_usuario LIKE '$producto%'"; }

        if($estado != ""){ if($estado == 'T'){ $estado = null;}}

        $sql = "SELECT id_usuario, CONCAT(nombre, ' ', apellido) AS nombre_completo, email, rolid FROM usuario WHERE estado LIKE '%$estado%' $condicion";

        $listUsuario =  $this->select_all($sql);

        foreach ($listUsuario as $list) {
            array_push($datos,
            array(
                "id_usuario" => $list["id_usuario"],
                "email" => $list["email"],
                "nombre_completo" => $list["nombre_completo"],
                "estado" => $list["estado"],
                "rol" => $list["rolid"],
                "btnVer" => '<button type="button" class="text-white btn btn-info" id="verUsuarioVista"><i class="fa fa-eye"></i></button>',
                "btnEditar" => '<button type="button" class="text-white btn btn-warning" id="viewEditarUsuario"><i class="fa fa-edit"></i></button>'

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
    public function editarUsuario() {
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