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
</div>
</div>
</div>



<!-- Iframe google maps-->
<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.705547779504!2d-76.54817868605355!3d3.4217247523726786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6a1a0473b67%3A0xcc0b0dff71b70350!2sCorporaci%C3%B3n%20Universitaria%20Aut%C3%B3noma%20de%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1663697060761!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
<!-- //Iframe google maps-->

<!-- Footer pie de pagina -->
<div class="footer">
	<div class="container">
		<br>
		<div class="row footer-info">
			<div class="col-md-4 col-sm-4 footer-info-grid links">
				<h4>ENLACES RÁPIDOS</h4>
				<ul>
					<li><a href="#about">Acerca</a></li>
					<li><a href="#features">Caracteristicas</a></li>
					<li><a href="#skills">Habilidades</a></li>
					<li><a href="#team">Equipo</a></li>
					<li><a href="#">Inicio</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 footer-info-grid address">
				<h4>Direccion</h4>
				<address>
					<ul>
						<li>TEQUENDAMA</li>
						<li>Cali Valle</li>
						<li>Colombia</li>
						<li>Telefono : +5 (314) 707-2792</li>
						<li>Email : <a class="mail" href="mailto:jose.dgo97@gmail.com">info jose.dgo97@gmail.com</a></li>
					</ul>
				</address>
			</div>
			<div class="col-md-4 col-sm-4 footer-info-grid email">
				<h4>Boletin</h4>
				<p>Suscríbase a nuestro boletín y le informaremos sobre los proyectos y promociones más recientes.
				</p>

				<form class="newsletter">
					<input class="email" type="email" placeholder="Tu email...">
					<input type="submit" class="submit" value="">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="connect">
			<div class="connect-social">
				<h4>CONECTATE CON NOSOTROS</h4>
				<ul>
					<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
					<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
					<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
					<li><a href="#" class="linkedin" title="Go to Our Linkedin Page"></a></li>
					<li><a href="#" class="blogger" title="Go to Our Blogger Account"></a></li>
					<li><a href="#" class="tumblr" title="Go to Our Tumblr Page"></a></li>
					<li><a href="#" class="rss" title="Go to Our RSS Feed"></a></li>
					<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
					<li><a href="#" class="vimeo" title="Go to Our Vimeo Channel"></a></li>
					<li><a href="#" class="deviantart" title="Go to Our Deviantart Page"></a></li>
				</ul>
			</div>
		</div>

		<div class="copyright">
			<p>Copyright &copy; <?= date("Y"); ?> Empresa. All Rights Reserved | Design by Aunar Developers </a></p>
		</div>

	</div>
</div>
<!-- //Footer pie de pagina -->
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