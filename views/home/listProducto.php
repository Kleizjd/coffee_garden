<?php
include_once "Config/Config.php";
include_once "App/lib/Helpers.php"; ?>
<?php include_once "Web/Modals/modalverProductoMain.php"; ?>

<!-- <div class="container-fluid bg-dark pt-3 pb-3"> -->
<div id="carouselExampleIndicators" class="carousel slide pt-3 pb-3" data-ride="carousel">

	<!-- <div class="row" id="latest_new"> -->
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" align="center">


		<?php $parts = array_chunk($listProducto, 5, true);$i =0;
		foreach ($parts as $item): 
			if ($i == 0){ echo '<div class="carousel-item active"><div class="row">';} else { echo '<div class="carousel-item"><div class="row">';}
			foreach($item as $card): ?>
					<div class="col">
								<form name="formNoticia">
									<div class="card" style="width: 10rem;">
										<ul class="list-group list-group-flush">
											<li class="list-group">
												<img style="height: 5rem;" src="./public/img/uploads/<?= $card['portada']; ?>" class="card-img-top" alt="...">
											</li>
											<li class="list-group-item" style="height: 5rem;">
												<h6 class="card-title"><?= $card['producto']; ?></h6>
											</li>
											<li class="list-group-item">
												<a type="button" class="btn btn-primary " data-toggle="modal" id="verN" title="Ver" onclick="openProducto(<?= $card['codigo']; ?>)">Ver Producto</a>
											</li>
										</ul>
									</div>
								</form>
							</div>
		<?php endforeach;
		$i =1;echo '</div></div>';
		endforeach;?>


	</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>

<?php include_once "partials/footer.php";?>

<script>
	function openProducto(element) {
		var base_url = window.location.origin;
		// "http://stackoverflow.com"

		var host = window.location.host;
		// stackoverflow.com

		var pathArray = window.location.pathname;
		// alert(base_url);
		$.ajax({
			url: 'app/lib/ajax.php',
			method: "post",
			dataType: "JSON",
			data: {
				modulo: "producto",
				controlador: "producto",
				funcion: "openProductoMain",
				codigo_producto: element,

			},
		}).done((res) => {
			$("#titulo_notice").text(res.producto);
			$("#descripcion").text(res.descripcion);
			$("#categoria_producto").text(res.categoria);
			$("#id_producto").val(res.id);
			$('#modalVerProducto').modal('show');
			var imagen_url = pathArray + "public/img/uploads/" + res.portada;
			// var imagen_url = `../../public/img/uploads/${res.portada}`;
			$("#img_notice").attr("src", imagen_url);
			$('#modalverProducto').modal('show');

		})
	}
</script>