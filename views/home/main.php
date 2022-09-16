<!-- Carrusel de imgenes -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" align="center">
		<div class="carousel-item active">
			<img class="d-block w-50 " src="public/img/carousel/Coffe_Garden.png" alt="Primer slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-50 " src="public/img/carousel/Coffe_Garden2.png" alt="Tercer slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-50 " src="public/img/carousel/Coffe_Garden1.png" alt="Segundo slide">
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

<!-- Iframe google maps-->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7965.468764380914!2d-76.5569245!3d3.41478!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1587511385606!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
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
						<li>Alfonzo Lopez III Etapa</li>
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
			<p>Copyright &copy; <?= date("Y"); ?>  Empresa. All Rights Reserved | Design by Aunar Developers </a></p>
		</div>

	</div>
</div>
<!-- //Footer pie de pagina -->
