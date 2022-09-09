<?php
// include_once "../config1/connection.php";
include_once "../../Config/Config.php";
include_once "../../Config/core.php";
class Venta extends Core {

    public function viewCreateSale(){
        @session_start();
		$data['page_functions_js'] = "functions_producto.js";
        include_once "../../views/Sale/view.generarVenta.php";
    }

    public function viewWatchSale(){
        extract($_POST);
        $sqlSale = $this->select("SELECT * FROM sale WHERE Nit_Sale = $nit_sale");
        include_once "../../views/Sale/view.WatchSale.php";
    }

    public function viewEditSale(){
        extract($_POST);
        $sqlSale = $this->select("SELECT * FROM provider WHERE Nit_Sale = $nit_provider");

        include_once "../../views/Sale/view.EditSale.php";
    }

    public function modalSearchSale(){
        include_once "../../views/Sale/view.modalSearchSale.php";
    }
    public function generarVenta() {
        extract($_POST);
        $answer = array();
        $creation_date=date("Y-m-d");
        // $insertSale = $this->insert("INSERT INTO sales_invoice (Invoice_Number, Date_Invoice, Nit_Customer, Subtotal, Total) VALUES ( NULL, '$creation_date', '$nit_cliente', '$saleSubTotal', '$saleTotal')");	
        // echo "INSERT INTO sales_invoice (Invoic
       
        $getInvoice_Number = $this->select("SELECT @@identity AS id");
       
        $numInvoice = trim($getInvoice_Number[0][0]);
        //
        
        
        if (isset($code)) {
            for ($i = 0; $i < count($code); $i++) {

                $insertDetailSale = $this->select("INSERT INTO sales_invoice_detail (invoice_number, code_product, Amount, product_value)  VALUES ( '$numInvoice', '$code[$i]', '$amount[$i]', '$valor[$i]')");
               //=========================/ Inventario /----------------------//
                $operation =  $this->select("SELECT amount FROM product WHERE code_product = '$code[$i]'");
                $row = $operation->fetch_assoc();
                $result = $row['amount'] ;
                $result = $result - $amount[$i];
                // if($result!=0){
                    $update = $this->select("UPDATE product SET amount ='$result' WHERE code_product = '$code[$i]'");
                //     $answer["typeAnswer"] = true;
                // } else { $answer["typeAnswer"] = "erase";}
                //-----------------------------------------------------------//
            }
        }
        if ($insertSale) {  $answer["typeAnswer"] = true; }
         echo json_encode($answer);  
    }

    public function selectProduct(){
        
        $query = $this->select("SELECT Code_Product, Product, Price FROM product");
        $select = "";
        $select .= "<option value=''>Seleccione ...</option>";
        while ($res = mysqli_fetch_row($query)) {
                $select .= "<option value=" . $res[0] ." data =". $res[2] .">" . $res[1] . "</option>";
        }
        echo $select;
    }
    public function searchCustomer(){
        extract($_POST);
        $data = array();

        $sqlcliente = $this->select("SELECT * FROM cliente WHERE nit_cliente = '$idCustomer'");

        foreach ($sqlcliente as $list) {
            $data = array(
                "nit_cliente" => $list["nit_cliente"],
                "nombre_cliente" => $list["cliente_name"],
                "apellido_cliente" => $list["apellido_cliente"],
                "telefono_cliente" => $list["telefono_cliente"],
                "direccion" => $list["direccion"],
                "correo" => $list["correo"],
            );
        }
        echo json_encode($data); 
    }

}