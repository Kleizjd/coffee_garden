let rowTable = "";

"use strict";
$(function modalTienda(){
    onCarga();
});
function onCarga() {

    $.ajax({
        url: "../App/Controllers/categoria.controller.php",
        method: "post",
        data: { funcion: "selectCategorias" }
    }).done((res) => {
        $("#selectCategorias").html(res);
    });
};