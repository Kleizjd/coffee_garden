<?php
@session_start();

include_once "../../Config/core.php";

class Proveedor extends Core {

    public function Proveedor(){
		$data['page_functions_js'] = "functions_cliente.js";

        include_once "../../views/proveedor/Proveedor.php";
    }

    public function verProveedor(){
        extract($_POST);
        $sqlProvider = $this->select("SELECT * FROM provider WHERE nit_proveedor = $nit_proveedor");
        include_once "../../views/Proveedor/view.WatchProvider.php";
    }

    public function editarProveedor(){
        extract($_POST);
        $sqlProvider = $this->select("SELECT * FROM provider WHERE nit_proveedor = $nit_proveedor");

        include_once "../../views/Proveedor/view.EditProvider.php";
    }

    public function crearProveedor() {
        extract($_POST);
        $answer = array();
        $creation_date=date("Y-m-d");
        // $InsertCustomer = $this->insert("INSERT INTO provider (nit_proveedor, Provider, Address_Provider, Phone_Provider, Email_Provider, Create_Date_Provider) VALUES ('$idCard', '$name_provider',  '$address_provider','$phone_provider', '$email_provider', '$creation_date')");	
    	
        if ($InsertCustomer) {  $answer["typeAnswer"] = true; } echo json_encode($answer);  
    }
    public function listProveedor(){
        extract($_POST); $datos = array(); $condition = "";
        
        if($nit != ""){
            $condition .="AND nit_proveedor LIKE '$nit%'";
        }
        if($name != "" ){  $condition .="AND Provider LIKE '$name%'"; }
        
       
        $listCostumer =  $this->select("SELECT nit_proveedor, Provider, Address_Provider, Phone_Provider, Email_Provider, Create_Date_Provider
                          FROM provider WHERE Email_Provider LIKE '%' $condition");
        

        foreach ($listCostumer as $list) {
            array_push($datos,
            array(
                "nit_proveedor" => $list["nit_proveedor"],
                "name_provider" => $list['Provider'],
                "address" => $list["Address_Provider"],
                "phone" => $list["Phone_Provider"],
                "email" => $list["Email_Provider"],
                "creation_date" => $list["Create_Date_Provider"],
                "btnVer" => '<button type="button" class="text-white btn btn-info" id="verProveedor"><i class="fa fa-eye"></i></button>',
                "btnEditar" => '<button type="button" class="text-white btn btn-warning" id="editarProveedor"><i class="fa fa-edit"></i></button>'

            ));
        }
            $table = array("data" => $datos); 
            echo json_encode($table);
    }
    // public function editarProveedor() {
    //     extract($_POST);
        // $answer = array();

    //    $UpdateProvider = $this->update("UPDATE provider SET Provider ='$name_provider', Address_Provider = '$address_provider', Phone_Provider = '$phone_provider', 
    //                                     Email_Provider = '$email_provider' WHERE nit_proveedor='$idCard'");	
      
    //     if ($UpdateProvider) {  $answer["typeAnswer"] = true; } echo json_encode($answer);  
    // }
    public function deleteProvider() {
        extract($_POST);
        $answer = array();
        $deleteCustomer = $this->delete("DELETE FROM provider WHERE nit_proveedor = '$idCard'");

        if ($deleteCustomer) { $answer["typeAnswer"] = true; } echo json_encode($answer); 
    }
}