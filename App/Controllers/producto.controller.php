<?php
@session_start();
include_once "../config1Config.php";
include_once "../config1core.php"; //realiza la conexion

$conexion = new Core();

if (!empty($_POST)) {
    if (!empty($_POST['funcion'])) {
        switch ($_POST['funcion']) {

                //======================================================================================\\
                //================================== CASE SELECT ACTIVIDADES =================================\\
                //========================================================================================\\

            case "selectCategorias":
                $sql = "SELECT id, categoria FROM categoria";

                $resultado = $conexion->select_all($sql);
                $select = "";
                $select .= "<option value=''>Seleccione ...</option>";

                foreach ($resultado as $row) {
                    $select .= "<option value=" . $row["id"] . ">" . $row["categoria"] . "</option>";
                }

                echo $select;

                break;

            case "selectProducto":

                $estado = "'A'";
                $sql = "SELECT codigo, producto FROM productos WHERE estado =" . $estado . " ";

                $resultado = $conexion->select_all($sql);
                $select = '';
               
                foreach ($resultado as $row) {
             
                    $select .= '<div class="carousel-item">';
                      $select .= '<img class="d-block w-100" src="http://localhost/www/coffe_garden/views/producto/img_product/'.$row['codigo'].'.png" alt="Second slide" height = "100" width = "100">';
                    $select .='</div>';
                 
                }

                echo $select ;

                break;

                //======================================================================================\\
                //================================== CASE SELECT ESTUDIANTES =================================\\
                //========================================================================================\\

        }
    }
}
