
<?php 
    $title = "Odontología para toda la familia | Dentiniños";
    include 'inc/head.php'; 
?>

		<header>
			<nav class="navbar navbar-expand-xl fixed-top navbar-light nav-dent">
				<div class="container container-fluid">
					<a class="navbar-brand" href="/"
						><img loading="lazy" id="logo-blanco" src="img/Logo-Dentininos-Blanco.png" alt="Logo" />
						<img loading="lazy" id="logo-color" src="img/logo.png" alt="Logo dentiniños color" />
					</a>

					<button
						class="navbar-toggler custom-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
						<div class="dropdown-divider"></div>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="/contactanos">Contáctanos</a>
							</li>
							<li class="nav-item d-flex center-items">
								<a class="nav-link" target="_blank" href="https://www.instagram.com/dentininos.cali/">
									<i class="bi bi-instagram"></i>
								</a>
							</li>
							<li class="nav-item d-flex center-items">
								<a class="nav-link" href="https://g.page/Dentininos?share">
									<i class="bi bi-geo-alt-fill"></i>
								</a>
							</li>
							<li class="nav-item">
								<button
									class="boton-cita"
									onclick="location.href='https://api.whatsapp.com/send?phone=573186179634&text=Deseo%20solicitar%20una%20cita'"
								>
									solicitar cita
								</button>
							</li>
						</ul>
						<div class="dropdown-divider"></div>
					</div>
				</div>
			</nav>
		</header>

		<section class="home-masthead">
			<div class="container banner">
				<div class="banner-inner">
					<h1 class="titulo-banner">Odontología integral<br />para toda la familia</h1>
				</div>
			</div>
		</section>

		<section class="section-style">
			<div class="container">
				<div data-aos="zoom-in" class="row inner-subtitle d-flex align-items-center">
					<h2 class="subtitulos-h2">Contacta nuestros <span style="color: #10addb">especialistas</span></h2>
					<div class="divider"><span></span></div>
					<p data-aos="fade-up" class="texto-blanco margen-abajo">
						En dentiniños nos preocupamos por la salud oral de toda tu familia, por eso, tenemos un especialista para todos los miembros
						de tu grupo familiar.
					</p>
				</div>

				<div class="row d-flex white-row contenedor-blanco">
					<div
						data-aos="fade-right"
						data-aos-anchor="#example-anchor"
						data-aos-offset="500"
						data-aos-duration="500"
						class="col-md-4 columnas-contactame2"
					>
						<div>
							<hr />
						</div>
						<div class="columnas-contactame">
							<img loading="lazy" src="img/ortho.jpg" class="img-border" alt="Ortodoncia" style="width: 100%" />
							<div class="tarjetas">
								<h3 class="subtitulos-h4">Ortodoncia</h3>
								<p>Cambia tu sonrisa con nosotros</p>
								<p class="texto-columnas">
									Nuestra tecnología nos permite ofrecerte la mejor calidad y precio, además nuestro equipo de ortodoncistas te acompaña en
									cada paso. Ofrecemos un seguimiento constante para que tu cambio sea en el menor tiempo posible.
								</p>
								<a href="https://api.whatsapp.com/send?phone=573012841962&text=Deseo%20solicitar%20una%20cita%20con%20Ortodoncia">
									<img loading="lazy" class="imagenes-contactame" src="/img/whatsapp.png" alt="Logo Whatsapp" />
								</a>
							</div>
						</div>
					</div>

					<div
						data-aos="fade-up"
						data-aos-anchor="#example-anchor"
						data-aos-offset="500"
						data-aos-duration="500"
						class="col-md-4 columnas-contactame2"
					>
						<div>
							<hr />
						</div>
						<div class="columnas-contactame">
							<img loading="lazy" src="img/pediatra.jpg" class="img-border" alt="Odontopediatría" style="width: 100%" />
							<div class="tarjetas">
								<h3 class="subtitulos-h4">Odontopediatría</h3>
								<p>Prevención y cuidado para los más pequeños</p>
								<p class="texto-columnas">
									Estamos convencidos de que un niño con una buena salud oral, es un niño feliz. Por esa razón, nuestra misión es que su visita
									al odontólogo sea una experiencia agradable y divertida. Somos capaces de entender las distintas etapas del desarrollo y
									salud oral de tu hijo.
								</p>
								<a href="https://api.whatsapp.com/send?phone=573186179634&text=Deseo%20solicitar%20una%20cita%20odontopediatría">
									<img loading="lazy" class="imagenes-contactame" src="/img/whatsapp.png" alt="Logo Whatsapp" />
								</a>
							</div>
						</div>
					</div>

					<div
						data-aos="fade-left"
						data-aos-anchor="#example-anchor"
						data-aos-offset="500"
						data-aos-duration="500"
						class="col-md-4 columnas-contactame2"
					>
						<div>
							<hr />
						</div>
						<div class="columnas-contactame">
							<img loading="lazy" src="img/rehab.jpg" class="img-border" alt="Rehabilitación" style="width: 100%" />
							<div class="tarjetas">
								<h3 class="subtitulos-h4">Rehabilitación</h3>
								<p>Te devolvemos la estética y funcionalidad de tus dientes</p>
								<p class="texto-columnas">
									Combinamos de manera integral el diagnóstico y tratamiento para recuperar tu salud, función y estética dental. Desde prótesis
									fijas, removibles y otras.
								</p>
								<a href="https://api.whatsapp.com/send?phone=573014364853&text=Deseo%20solicitar%20una%20cita%20rehabilitación">
									<img loading="lazy" class="imagenes-contactame" src="/img/whatsapp.png" alt="Logo Whatsapp" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-style">
			<div class="container">
				<div data-aos="fade-right" data-aos-offset="-20" class="row d-flex margin-row">
					<div class="col-lg-6 inner-subtitle d-flex right">
						<h2 class="subtitulos-h2 right">Nuestros servicios</h2>
						<div class="divider" style="width: 100%"><span class="span1"></span></div>
						<p class="texto-blanco right">
							En dentiniños creemos en entregar los mejores y más cualificados servicios dentales para toda la familia.
						</p>
					</div>
					<div class="col-lg-6 d-flex justify-content-center">
						<div class="recuadro">
							<ul class="lista-servicios">
								<li>Odontopediatria</li>
								<li>Ortopedia Maxilar</li>
								<li>Sedación</li>
								<li>Prótesis</li>
								<li>Coronas</li>
								<li>Implantes</li>
								<li>Blanqueamiento</li>
								<li>Diseño de sonrisa</li>
								<li>Ortodoncia</li>
								<li>Periodoncia</li>
								<li>Endodoncia</li>
								<li>Cirugía Maxilofacial</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-style">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12"></div>
					<div class="d-flex col-md-12 col-sm-12 justify-content-center">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2">
										<h2 class="subtitulos-h2" id="horario">Horario de atención</h2>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Lunes</td>
									<td class="texto-table">8:30AM - 12M | 2PM - 6:30PM</td>
								</tr>
								<tr>
									<td>Martes</td>
									<td class="texto-table">8:30AM - 12M | 2PM - 6:30PM</td>
								</tr>
								<tr>
									<td>Miércoles</td>
									<td class="texto-table">8:30AM - 12M | 2PM - 6:30PM</td>
								</tr>
								<tr>
									<td>Jueves</td>
									<td class="texto-table">8:30AM - 12M | 2PM - 6:30PM</td>
								</tr>
								<tr>
									<td>Viernes</td>
									<td class="texto-table">8:30AM - 12M | 2PM - 6:30PM</td>
								</tr>
								<tr>
									<td>Sábado</td>
									<td class="texto-table">8AM - 2PM</td>
								</tr>
								<tr>
									<td>Domingo</td>
									<td class="texto-table">Cerrado</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

		<section class="home-masthead" id="gallery-section" style="height: auto; padding: 5%">
			<h4 class="titulo-banner" style="font-style: oblique; background-color: #504ea1; z-index: 1">Nuestras sonrisas</h4>

			<div class="row gallery">
				<div class="col-md-3 gallery__column">
					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/1.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/2.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/3.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>
				</div>

				<div class="col-md-3 gallery__column">
					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/4.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/5.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/6.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>
				</div>

				<div class="col-md-3 gallery__column">
					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/7.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/8.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/9.jpg" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>
				</div>

				<div class="col-md-3 gallery__column">
					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/10.png" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/11.png" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/12.png" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>

					<figure class="gallery__thumb gallery__link">
						<img loading="lazy" src="/img/galeria/13.png" alt="Foto: Carlos Enrique Rivas Benoit" class="gallery__image" />
						<figcaption class="gallery__caption">Foto: Carlos Enrique Rivas Benoit</figcaption>
					</figure>
				</div>
			</div>
		</section>


		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>



<?php include 'inc/footer.php'; ?>
