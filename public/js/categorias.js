let rowTable = "";


function onCarga() {

    $.ajax({
        url: "../App/Controllers/categoria.controller.php",
        method: "post",
        data: { funcion: "selectCategorias" }
    }).done((res) => {
        $("#selectCategorias").html(res);
    });
};
function openModal()
{
    rowTable = "";
    document.querySelector('#idCategoria').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nueva Categoría";
    document.querySelector("#formCategoria").reset();
    $('#modalFormCategorias').modal('show');
    removePhoto();
}
// var agregarCategorias = $(document).on("submit", "#formCategorias", function (event) {
//     event.preventDefault(); // Evitar ejecutar el submit del formulario.
//     alert("entra");
//     // if ($("#id", this).val() || $("#Nombre_Comercial", this).val()) {
// // }
// });
// agregarProducto
// "use strict";
//

    // $( document ).ready(function(event) {
    // event.preventDefault(); // Evitar ejecutar el submit del formulario.
    // });