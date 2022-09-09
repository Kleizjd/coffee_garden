<?php

include_once "../../Config/core.php";

class Cliente extends Core {

    public function Cliente(){
		// session_start();

		$data['page_functions_js'] = "functions_cliente.js";
        include_once "../../views/cliente/Cliente.php";
    }

    public function verCliente(){
        extract($_POST);
        $sqlCliente = $this->select("SELECT * FROM customer WHERE Nit_Customer = $nit_customer");
        $sqlFormadePago =  $this->select("SELECT * FROM waytopay WHERE Code_Way_Pay = '$waytopay'");

        include_once "../../views/Cliente/view.WatchCustomer.php";
    }

    public function editarCliente(){
        extract($_POST);
        $sqlCliente = $this->select("SELECT * FROM customer WHERE Nit_Customer = $nit_customer");
        $sqlFormadePago =  $this->select("SELECT * FROM waytopay WHERE Code_Way_Pay = '$waytopay'");
        
        // $waytoPay = $this->select("SELECT * FROM waytopay ORDER BY Description");

        include_once "../../views/Cliente/view.EditCustomer.php";
    }

    public function modalBuscarCliente(){
        include_once "../../views/Cliente/view.modalSearchCustomer.php";
    }
    public function crearCliente() {
        extract($_POST);
        $answer = array();
        $creation_date=date("Y-m-d");
        $InsertCustomer = $this->select("INSERT INTO customer (Nit_Customer, Name_Customer, LastName_Customer, Phone_Customer, Address, Email, Creation_Date, Code_Way_Pay)
                                        VALUES ('$idCard', '$name_customer', '$lastName_customer', '$phone_customer' , '$address_customer', '$email_customer', '$creation_date', '$WaytoPay')");	
        
        if ($InsertCustomer) {  $answer["typeAnswer"] = true; } 
        echo json_encode($answer);  
    }

    public function listarCliente(){
        extract($_POST);
        $datos = array(); 
        $condition = "";
        
        if($nit != ""){
            $condition .="AND Nit_Customer LIKE '$nit%'";
        }
        if($name != "" ){
            $condition .="AND Name_Customer LIKE '$name%'";
        } 
        if($lastname != ""){
            $condition .="AND LastName_Customer LIKE '$lastname%'";
        } 
       
        $listCostumer =  $this->select("SELECT Nit_Customer, Name_Customer, LastName_Customer, Address, Email, Creation_Date, Code_Way_Pay
                          FROM customer WHERE Email LIKE '%' $condition");
        // echo "SELECT * FROM customer WHERE Code_Way_Pay = '$WaytoPay'";

        foreach ($listCostumer as $list) {
            array_push($datos,
            array(
                "nit_Customer" => $list["Nit_Customer"],
                "name_customer" => $list['Name_Customer'],
                "lastName_customer" => $list['LastName_Customer'],
                "address" => $list["Address"],
                "email" => $list["Email"],
                "creation_date" => $list["Creation_Date"],
                "waytopay" => $list["Code_Way_Pay"],
                "btnVer" => '<button type="button" class="text-white btn btn-info" id="viewWatchCustomer"><i class="fa fa-eye"></i></button>',
                "btnEditar" => '<button type="button" class="text-white btn btn-warning" id="editarCliente"><i class="fa fa-edit"></i></button>'

            ));
        }
            $table = array("data" => $datos);
            echo json_encode($table);
    }
    public function EditCustomer() {
        extract($_POST);
        $answer = array();

       $UpdateCustomer = $this->select("UPDATE customer SET Name_Customer ='$name_customer', LastName_Customer = '$lastName_customer', Phone_Customer = '$phone_customer',
                                        Address = '$address_customer', Email = '$email_customer', Code_Way_Pay = '$waytoPay' WHERE Nit_Customer='$idCard'");	
      
        if ($UpdateCustomer) {  $answer["typeAnswer"] = true; } echo json_encode($answer);  
    }
    

    public function deleteCustomer() {
        extract($_POST);
        $answer = array();
        $deleteCustomer = $this->select("DELETE FROM customer WHERE Nit_Customer='$idCard'");

        if ($deleteCustomer) { $answer["typeAnswer"] = true; } echo json_encode($answer); 
    }
}