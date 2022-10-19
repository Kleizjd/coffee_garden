<?php
include_once "../../Config/core.php";
include_once "../../App/lib/Helpers.php";


class Producto extends Core
{
    // VISTAS
    public function producto()
    {
        // $data['page_functions_js'] = "functions_producto.js";
        $sqlProducto = $this->select_all("SELECT * FROM categorias");
        include_once "../../views/producto/producto.php";
    }
    public function visualizarProducto()
    {
        extract($_POST);
        // var_dump($_POST);
        $sqlProducto = $this->select_all("SELECT * FROM producto WHERE codigo = $idProducto");
        include_once "../../views/producto/view.verProducto.php";
    }
    public function viewEditarProducto()
    {
        extract($_POST);
        // var_dump($_POST);
        $sqlProducto = $this->select_all("SELECT * FROM producto WHERE codigo = $codigo");
        $Producto_categoria = $this->select_all("SELECT id, nombre FROM categorias");
        include_once "../../views/producto/view.EditProducto.php";
    }
    // END VISTAS
    // LISTA DE PRODUCTOS ADMINISTRADOR
    public function listProducto()
    {
        extract($_POST);
        // var_dump($_POST);    
        $datos = array();

        if ($categoria_producto != "") {
            if ($categoria_producto == 'T') {
                $categoria_producto = null;
            }
        }

        $sql = "SELECT p.codigo, producto, categoria, nombre, estado, descripcion  FROM producto p, categorias c WHERE p.categoria = c.id AND  c.id LIKE '%$categoria_producto%'";

        $listProducto =  $this->select_all($sql);

        foreach ($listProducto as $list) {
            array_push(
                $datos,
                array(
                    "codigo" => $list["codigo"],
                    "producto" => $list["producto"],
                    "categoria" => $list["nombre"],
                    "descripcion" => $list["descripcion"],
                    "btnVer" => '<button type="button" class="text-white btn btn-info" id="verProductoVista"><i class="fa fa-eye"></i></button>',
                    "btnEditar" => '<button type="button" class="text-white btn btn-warning" id="viewEditarProducto"><i class="fa fa-edit"></i></button>'

                )
            );
        }
        $table = array("data" => $datos);
        echo json_encode($table);
    }
    // END LISTA DE PRODUCTOS ADMINISTRADOR
    //  PRODUCTOS CREAR, EDITAR, ELIMINAR
    public function crearProducto()
    {


        // extract($_POST);
        // dep($_POST);
        if ($_POST) {
            if (empty($_POST['txtTitulo']) || empty($_POST['txtDescripcion'])) {
                $arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
            } else {

                $intidProducto= intval($_POST['idNoticia']);
                $strTitulo =  strClean($_POST['txtTitulo']);
                $strDescripcion = strClean($_POST['txtDescripcion']);
                $categoria = strClean($_POST['categoria']);

                $ruta = strtolower(clear_cadena($strTitulo));
                $ruta = str_replace(" ", "-", $ruta);

                $foto            = $_FILES['foto'];
                $nombre_foto     = $foto['name'];
                $type            = $foto['type'];
                $url_temp        = $foto['tmp_name'];
                $imgPortada      = 'portada_noticia.png';
                $request_insert  = "";
                if ($nombre_foto != '') { $imgPortada = 'img_' . md5(date('d-m-Y H:i:s')) . '.jpg'; }

                if ($intidProducto== 0) {

                    $sql = "SELECT * FROM Producto WHERE titulo = '{$strTitulo}' ";
                    $request = $this->select_all($sql);

                    if (empty($request)) {
                        $query_insert  = "INSERT INTO Producto(titulo, categoria, descripcion, ruta, portada) VALUES(?,?,?,?,?)";
                        $arrData = array($strTitulo, $categoria, $strDescripcion, $ruta, $imgPortada);
                        $request_insert = $this->insert($query_insert, $arrData);
                        $return = $request_insert;
                    } else {
                        $return = "exist";
                    }
                    $option = 1;
                } else {
                    //Actualizar

                    if ($nombre_foto == '') {
                        if ($_POST['foto_actual'] != 'portada_noticia.png' && $_POST['foto_remove'] == 0) {
                            $imgPortada = $_POST['foto_actual'];
                        }
                    }
                    $sql = "SELECT * FROM Producto WHERE titulo = '{$strTitulo}' AND id != $this->intIdnoticia";
                    $request = $this->select_all($sql);
                    
                    if (empty($request)) {
                        $sql = "UPDATE categoria SET nombre = ?, descripcion = ?, portada = ?, ruta = ?, status = ? WHERE idcategoria = $this->intidProducto";
                        $arrData = array($strTitulo, $categoria, $strDescripcion, $ruta, $imgPortada);
                        $request = $this->update($sql, $arrData);
                    } else {
                        $request = "exist";
                    }
                    $option = 2;
                }
                if ($request_insert > 0) {
                    if ($option == 1) {

                        $arrResponse = array('status' => true, 'msg' => 'Noticia Ingresado exitosamente');
                        if ($nombre_foto != '') {
                            uploadImage($foto, $imgPortada);
                        }
                    } else {
                        $arrResponse = array('status' => true, 'msg' => 'Noticia Actualizada correctamente.');
                        if ($nombre_foto != '') {
                            uploadImage($foto, $imgPortada);
                        }

                        if (($nombre_foto == '' && $_POST['foto_remove'] == 1 && $_POST['foto_actual'] != 'portada_noticia.png')
                            || ($nombre_foto != '' && $_POST['foto_actual'] != 'portada_noticia.png')
                        ) {
                            deleteFile($_POST['foto_actual']);
                        }
                    }
                } else if ($request_insert == 'exist') {
                    $arrResponse = array('status' => false, 'msg' => '¡Atención! La noticia ya existe.');
                } else {
                    $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
    }
    public function editarProducto()
    {
        extract($_POST);
        $respuesta = array();

        $sql = "UPDATE Producto SET titulo ='$titulo',  categoria = '$categoria', descripcion = '$description' WHERE id='$code_noticia'";
        $actualizarNoticia = $this->select($sql);

        // if ($actualizarNoticia) {  $respuesta["tipoRespuesta"] = true; }
        // echo json_encode($respuesta);  
        $respuesta["tipoRespuesta"] = true;
        echo json_encode($respuesta);
    }
    public function borrarProducto()
    {
        extract($_POST);
        // var_dump($_POST);
        $respuesta = array();

        $sql = "DELETE FROM Producto WHERE id='$Id'";
        $borrarProducto = $this->delete($sql);
        $sqlComent = "DELETE FROM comentario WHERE codigo_producto='$Id'";
        $comentario = $this->delete($sqlComent);
        $sqlComent = "DELETE FROM reaccion WHERE codigo_producto='$Id'";
        $comentario = $this->delete($sqlComent);
        if ($borrarProducto) {
            $respuesta["tipoRespuesta"] = true;
        }

        echo json_encode($respuesta);
    }
    // END PRODUCTOS
    //  OPEN MODAL SESSION ACTIVA
    public function openProducto()
    {   extract($_POST);
    // var_dump($_POST);

        $sql = "SELECT * FROM Producto n, categorias c WHERE n.codigo = '$id' AND c.id = n.categoria";       
        $sqlProducto =  $this->select($sql);//NOTICIA
        $sqlgusta = "SELECT * FROM reaccion WHERE email = '$email' AND codigo_producto = '$id'";       
        $sqlLike =  $this->select($sqlgusta);//REACCIONES
        $cantidad = "SELECT COUNT(codigo_producto) as total FROM reaccion WHERE codigo_producto = '$id'";
        $sqlCantidad =  $this->select($cantidad);//CANTIDAD GENERAL DE REACCIONES
        $comentario = "SELECT c.id, nombre, u.email, codigo_producto, comentario FROM comentario c, usuarios u WHERE c.email = u.email AND codigo_producto = '$id'  ORDER BY c.id DESC";
        $sqlComentario =  $this->select_all($comentario);//COMENTARIOS
        $rating = "SELECT * FROM rating WHERE email = '$email' AND id_producto = '$id'";
        $sqlRating =  $this->select($rating);//CALIFICACION
        $carrito = "SELECT * FROM carrito WHERE email = '$email' AND codigo_producto = '$id'";
        $sqlCarrito =  $this->select($carrito);//CARRITO
        $comentarios = "";
        
         foreach ($sqlComentario as $comment) {
                if($comment['email']=== $email){

                $comentarios .= '<div class="border rounded" name="'.$comment['id'].'"><p><b>'.$comment['nombre'].': </b>'.$comment['comentario'].'<button type="button" class="btn btn-danger btn-sm float-sm-right"  id="'.$comment['id'].'" onclick="deleteComentario(this)"><i class="fas fa-backspace"></i></button></p></div>';

                } else {
                    $comentarios .= '<div class="border rounded"><b>'.$comment['nombre'].': </b>'.$comment['comentario'].'</b></div>';

                }
        }
        if ($sqlProducto) {
            $respuesta["tipoRespuesta"] = true;
            $respuesta["producto"] = $sqlProducto["producto"];
            $respuesta["descripcion"] =  $sqlProducto["descripcion"];
            $respuesta["categoria"] =  $sqlProducto["nombre"];
            $respuesta["portada"] =  $sqlProducto["portada"];
            $respuesta["total"] =  $sqlCantidad["total"];
            $respuesta["id"] =  $id;
            $respuesta["cantidad"] =  $id;
            $respuesta["comentarios"] =  $comentarios;
            if($sqlRating){ $respuesta["calificacion"] =  $sqlRating["calificacion"]; } 
            if($sqlCarrito){ $respuesta["codigo_producto"] =  "success"; } else { $respuesta["codigo_producto"] = "error";}

            if($sqlLike){
                $respuesta["like"] =  true;
            } else {
                $respuesta["like"] =  false;
            }
        }

        echo json_encode($respuesta);
    } 
    //  OPEN MODAL HOME
    public function openProductoMain()
    {   extract($_POST);
        $sql = "SELECT * FROM producto n, categorias c WHERE n.codigo    = '$codigo_producto' AND c.id = n.categoria";       
        $sqlProducto =  $this->select($sql);
        if ($sqlProducto) {
            $respuesta["tipoRespuesta"] = true;
            $respuesta["producto"] = $sqlProducto["producto"];
            $respuesta["descripcion"] =  $sqlProducto["descripcion"];
            $respuesta["categoria"] =  $sqlProducto["nombre"];
            $respuesta["portada"] =  $sqlProducto["portada"];
        }

        echo json_encode($respuesta);
    }
    // END OPEN MODAL
    // COMENTARIOS
    public function comentaProducto()
    {   extract($_POST);
        // var_dump($_POST);// echo ($email."".$codigo_producto."".$comentario);
        $respuesta = array();
            if($comentario != ""){
                $sqlInsert = "INSERT INTO comentario(email,codigo_producto,comentario) VALUES (?,?,?)"; 
                $arrData = array($email, $id_producto,$comentario);
                $sql = $this->insert($sqlInsert, $arrData);
                
                $sqlComent = "SELECT id FROM comentario WHERE  email='$email' AND codigo_producto = '$id_producto' ORDER BY id DESC LIMIT 1";
                $sqlComentario =  $this->select($sqlComent);
    
                $respuesta["id"] = $sqlComentario["id"];
                $respuesta["tipoRespuesta"] = "success";
            } 
            
        echo json_encode($respuesta);
    }
    public function deleteComentario()
    {
        extract($_POST);
            
            $sql = "DELETE FROM comentario WHERE  email='$email' AND codigo_producto='$id_producto' AND id = '$idComent'";  
            $sqlComentario =  $this->delete($sql);
            $respuesta["tipoRespuesta"] = true;
            $id_comentario = strval($idComent);

            $respuesta["id_comentario"] = $id_comentario;

        echo json_encode($respuesta);
    }
    // END COMENTARIOS 
    // REACCION PRODUCTO 
    public function likeProducto()
    {   extract($_POST);
        $sql = "SELECT * FROM reaccion WHERE  email='$email' AND codigo_producto = '$id_producto'"; 
        $sqlProducto =  $this->select($sql);

        if(!$sqlProducto){ 
            $sql = "INSERT INTO reaccion(email,codigo_producto) VALUES (?,?)"; 
            $arrData = array($email, $id_producto);
            $request = $this->insert($sql, $arrData);
            $respuesta["tipoRespuesta"] = true;

        } else { 
            $sql = "DELETE FROM reaccion WHERE email='$email' AND codigo_producto = '$id_producto'";
            $request = $this->delete($sql);
            $respuesta["tipoRespuesta"] = false;

        }     
        echo json_encode($respuesta);
    }
    // END REACCION PRODUCTO 
    // CARGA VISTA PRINCIPAL DE PRODUCTO
    public function loadProductos()
    {   extract($_POST);
        $sql = "SELECT *  FROM producto ORDER BY codigo DESC";
        $listProducto =  $this->select_all($sql);
        include_once "../../views/listProducto.php";
    }
    public function ratingProducto()
    {   extract($_POST);
        $sql = "SELECT * FROM rating WHERE  email='$email' AND id_producto = '$id_producto'"; 
        $sqlNoticia =  $this->select($sql);

        if(!$sqlNoticia){ 
            $sql = "INSERT INTO rating(email,id_producto, calificacion) VALUES (?,?,?)"; 
            $arrData = array($email, $id_producto, $calificacion);
            $request = $this->insert($sql, $arrData);
            $respuesta["tipoRespuesta"] = true;

        } else { 

            $sqlRating = "UPDATE rating SET calificacion = '$calificacion' WHERE email ='$email' AND  id_producto = '$id_producto'";
            $actualizarRating = $this->select($sqlRating);
            $respuesta["tipoRespuesta"] = false;
        }     
        echo json_encode($respuesta);
    }
 
}
