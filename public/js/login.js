(function validarLogin() {
	$("#login-form").on("submit", function (event) {
		event.preventDefault(); // Evitar ejecutar el submit del formulario.

			var formData = new FormData(event.target);
			formData.append("funcion", "validar_sesion");
			$.ajax({
				url: "App/Controllers/login.controller.php",
				method: "post",
				dataType: "json",
				data: formData,
				cache: false, 
				contentType: false, 
				processData: false
			}).done((res) => {
				if (res.tipoRespuesta == "success") {
					location.href = "Web/template.view.php";
				} else if (res.tipoRespuesta == "error") {
					swal({ title: 'El usuario ingresado no existe', type: 'warning',	});
				}
			});
	});
}());

(function create_account() {
	$("#create_account").on("submit", function (event) {
		event.preventDefault(); // Evitar ejecutar el submit del formulario.
		// alert("entra");
			var formData = new FormData(event.target);
			formData.append("funcion", "register_user");
            formData.append('user_id', $("#user_id").val());
            formData.append('nombre', $("#nombre").val());
            formData.append('apellido', $("#apellido").val());
            formData.append('password_user', $("#password_user").val());
            formData.append('password_verify', $("#password_verify").val());

			$.ajax({
				url: "App/Controllers/login.controller.php",
				method: "post",
				dataType: "json",
				data: formData,
				cache: false, 
				contentType: false, 
				processData: false
			}).done((res) => {
				if (res.tipoRespuesta == "success") {
					swal({ title: 'Usuario creado exitosamente', type: 'success' });
				} else if (res.tipoRespuesta == "error") {
					swal({ title: 'contraseña no coincide', type: 'warning',});
				} else if (res.tipoRespuesta == "exist") {
					swal({ title: 'Usuario Existente', type: 'warning',});
				}
			});
	});
}());
// success: function (dato) {
// 	$('#div_Datos_Adicionales').html(dato);
// 	$('#VerDatos').modal('show');
// }