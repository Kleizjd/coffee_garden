let rowTable = "";

"use strict";
$(function modalTienda(){
    onCarga();
});

function onCarga() {

    $.ajax({
        url: "../App/Controllers/producto.controller.php",
        method: "post",
        data: { funcion: "selectCategorias" }
    }).done((res) => {
        $("#selectCategorias").html(res);
    });
        $.ajax({
            url: "../App/Controllers/producto.controller.php",
            method: "post",
            data: { funcion: "selectProducto" }
        }).done((res) => { $("#selectProducto").html(res); });
};
   

    /***************************/ //CREATE PRODUCT// /**************************/
    $(function RegistrarProducto() {
		$(document).on("submit", "#frm_Product", function (event) {
			event.preventDefault();
			
			var formData = new FormData(event.target);
			formData.append("modulo", "Product");
			formData.append("controlador", "Product");
			formData.append("funcion", "CreateProduct");
			$.ajax({
				url: "../App/Controllers/producto.controller.php",
				method: "POST",
				dataType: "json",
				data: formData,
				cache: false, 
				processData: false,
				contentType: false
			}).done((res) => {
                if (res.typeAnswer == true) {  swal({ title: 'Producto Ingresado exitosamente', type: 'success' });} 
			});
		});
	});
      /*************************** END **************************/