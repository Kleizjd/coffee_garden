$(function cerrarSesion() {
  $(document).on("click", "#salir", function () {
    $.ajax({
      url: "../App/Controllers/login.controller.php",
      method: "post",
      data: { funcion: "cerrarSesion" },
    }).done(() => {
      window.location.href = "../";
    });
  });
});
