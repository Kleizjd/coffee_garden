
$(document).ready(function () {
    //=============================[  PRODUCT  ]=================================//	
    $(function verProducto() { var menu = "producto";
        $(document).on("click", "#verProducto", function () { llamarVista(menu, menu, menu); }); });
    //=============================[ CUSTOMER/CLIENTE ]=========================//	
    $(function verCliente() {
        $(document).on("click", "#verCliente",function () {var menu = "cliente"; llamarVista(menu,menu,menu); });});
    //=============================[ PROVIDER / PROVEEDOR ]=========================//	
    $(function proveedor() {
        $(document).on("click", "#proveedor", function () { var menu = "proveedor"; llamarVista(menu, menu, menu);});});
    //=============================[   SALE / VENTA ]=========================//	
    $(function generarVenta() { 
        $(document).on("click", "#generarVenta", function () { var menu = "venta"; llamarVista(menu, menu,menu); })})
    });
    $(document).on("click", "#ajustes", function() { 
        let userId = new Object();  userId["userId"] = $("#userId").val(); //VARIABLES
        //  $("#img_profile_herence").attr("src", $("#img_profile").attr("src")); 
         llamarVista("perfil", "perfil", "perfil", userId);
    });
    