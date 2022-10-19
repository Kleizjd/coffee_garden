<?php getModal('modalVerProducto'); ?>

<div class="card text-center">
	<div class="card-header">
		<h4>Producto</h4>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<div class="row pb-3" id="latest_new">
				<?php $count = 5;
				$i = 0;
				foreach ($listProducto as $list) : ?>
					<?php if ($i == $count) {
						echo '</div><div class="row">';
						$count = $count + 5;
					}
					$i++; ?>
					<div class="col-sm-2 mx-auto">
						<form name="formNoticia">
							<input type="hidden" name="email" id="email" value="<?= $_SESSION["correo_login"]; ?>">

							<div class="card" style="width: 10rem;">
								<ul class="list-group list-group-flush">
									<li class="list-group">
										<img style="height: 5rem;" src="../../public/img/uploads/<?= $list['portada']; ?>" class="card-img-top" alt="...">
									</li>
									<li class="list-group-item">
										<h6 class="card-title"><?= $list['producto']; ?></h6>
									</li>
									<li class="list-group-item">
										<a type="button" class="btn btn-primary " data-toggle="modal" id="verN" data-target="#modalProducto" title="Ver" onclick="openProducto(<?= $list['codigo']; ?>)">Ver Producto</a>
									</li>
								</ul>
							</div>
						</form>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- Modal Coffe Garden -->
<div class="modal fade" id="openingApp" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="container-fluid">
			<div class="justify-content-center row">
				<div class="col-12">
					<img src="../../public/img/Coffe_Garden.png" alt="Logo Semana 6" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	"use strict";
	$(function openingApp(){
		$("#openingApp").modal("show");
	});

	function openProducto(element) {
		$.ajax({
			url: '../../app/lib/ajax.php',
			method: "post",
			dataType: "JSON",
			data: {
				modulo: "producto",
				controlador: "producto",
				funcion: "openProducto",
				id: element,
				email: $("#email").val(),
			},
		}).done((res) => {
			if (res.tipoRespuesta == true) {
				$("#titulo_notice").text(res.producto);
				$("#descripcion").text(res.descripcion);
				$("#categoria_producto").text(res.categoria);
				$("#id_producto").val(res.id);
				$("#n_likes").text(res.total);
				$(`#${res.calificacion}`).prop("checked", true)  

				// var imagen_url = "../../public/img/uploads/"+res.portada;
				var imagen_url = `../../public/img/uploads/${res.portada}`;
				if(res.like === true){$( "#me_gusta" ).prop( "checked", true );} else {$( "#me_gusta" ).prop( "checked", false );}
				// alert( "res", res.codigo_producto);
				if(res.codigo_producto === "success"){	
					$("#addCart").removeClass("btn-primary");
					$("#addCart").addClass("btn-secondary");
					$("#addCart").text("Eliminar");
					$("#addCart").val("elimina");
					document.getElementById("cantidad").style.display = "none";

				} else if(res.codigo_producto === "error"){
					$("#addCart").addClass("btn-primary");
					$("#addCart").removeClass("btn-secondary");
					$("#addCart").text("Agregar al carrito");
					$("#addCart").val("");
					document.getElementById("cantidad").style.display = "block";
				}
				$("#img_notice").attr("src",imagen_url);
				$("#img_notice").attr("src",imagen_url);
				$('#modalVerProducto').modal('show');
			
				let usuario  = ((res.usuario === "undefined") ? res.usuario+":": "");
				$("#comentar").html(`${usuario} ${res.comentarios}</b>`);

				document.getElementById("form_comment").reset();
			}
		});
	}
</script>