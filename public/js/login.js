

 (function validarLogin() {
    $(document).on("submit", "#login_form", function (event) {

    // $("#login_form").on("submit", function (event) {
        event.preventDefault();
           var formData = new FormData(event.target);
            formData.append("modulo", "login");
            formData.append("controlador", "login");
            formData.append("funcion", "crearSesion");

            $.ajax({
                url: 'app/lib/ajax.php',
                method: $(this).attr('method'),
                dataType: 'JSON',
                data: formData,
                cache: false,
                processData: false,
                contentType: false
            }).done((res) => {
                if (res.tipoRespuesta == "success") {
                    location.href = "web/pages"
                } else {
                    swal({
                        title: "Usuario o Contraseña incorrectos",
                        type: "error"
                    });
                }
            })
        });
}());
 (function create_account() {
    $("#create_account").on("submit", function (event) {
        event.preventDefault();

           var formData = new FormData(event.target);
            formData.append("modulo", "login");
            formData.append("controlador", "login");
            formData.append("funcion", "registarUsuario");
            formData.append('user_id', $("#user_id").val());
            formData.append('password_user', $("#password_user").val());
            formData.append('password_verify', $("#password_verify").val());
            formData.append('nombre', $("#nombre").val());
            formData.append('apellido', $("#apellido").val());


            $.ajax({
                url: 'app/lib/ajax.php',
                method: $(this).attr('method'),
                dataType: 'JSON',
                data: formData,
                cache: false,
                processData: false,
                contentType: false
            }).done((res) => {
                if (res.tipoRespuesta == "success") {
                    location.href = "web/pages"
                } else {
                    swal({
                        title: "Usuario o Contraseña incorrectos",
                        type: "error"
                    });
                }
            })
        });
}());


// (function closeSession(){
//     $(document).on("click", "#exit", function (event) {
//         var formData = new FormData(event.target);
//         formData.append("modulo", "login");
//         formData.append("controlador", "login");
//         formData.append("funcion", "registarUsuario");
//         $.ajax({
//             // url: "../App/Controllers/login.controller.php",
//             method: "post",
//             data: { function: "cerrar_sesion", }
//         }).done(() => {
//             window.location.href = "../";
//         });
//     });

// }());