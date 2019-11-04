<?php $lang = "es" ?>
<?php include "../common/head.php" ?>

<body>
<header id="header" class="alt">
	<div class="container-width">
		<span id="idiom">
			<img src="/images/blank.gif" width="1" height="1" class="flag flag-cu" alt="cuba"/><input type="checkbox" class="js-switch" name="name2"/>
			<img src="/images/blank.gif" width="1"height="1" class="flag flag-us" alt="english"/>
		</span>
		<div id="text">
			<h2 class="font_2">
				<span class="big">PREGÚNTANOS <br>
				<span class="bold">CUALQUIER COSA</span><br> SOBRE <span class="bold">CUBA</span></span>
			</h2>
			<p>Nos especializamos en estudios de mercado. Cuando necesites datos, ya no estás solo</p>
		</div>
		<div id="but"><a href="#report" class="button default">Ver resultados de la encuesta</a></div>
	</div>
</header>

<!-- Wrapper -->
<div id="wrapper">
	<!-- Nav -->
	<nav id="nav" class="alt">
		<div class="container-width">
			<img src="/images/cubadata_logo.png" alt="logo cubadata" width="133" height="78">
			<ul>
				<li><a href="#intro" class="active">TRABAJO</a></li>
				<li><a href="#second">NOSOTROS</a></li>
				<li><a href="#report">ENCUESTAS</a></li>
				<li><a href="#experts">EQUIPO</a></li>
				<li><a href="#news">PRENSA</a></li>
				<li><a href="#contact">CONTACTO</a></li>
				<li>
					<img src="/images/blank.gif" width="1" height="1" class="flag flag-cu" alt="cuba"/>
					<input type="checkbox" class="js-switch" id="idiom-main" name="idiom1"/>
					<img src="/images/blank.gif" width="1" height="1" class="flag flag-us" alt="english"/>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Main -->
	<div id="main">
		<section id="report" class="main special">
			<header class="major">
				<h2 class="font_2"><?= strtoupper($surveys[0]->$lang->title) ?></h2>
				<p>Accede a nuestra última encuesta, e infórmate sobre qué piensan realmente los cubanos</p>
			</header>
			<footer class="major">
				<ul class="actions special">
					<li><a href="<?= $surveys[0]->$lang->link_results ?>" class="button primary" target="_blank">Ver Resultados</a></li>
					<li><a href="<?= $surveys[0]->$lang->link_analysis ?>" class="button primary" target="_blank">Ver Análisis</a></li>
					<li>
						<a href="#other-surveys-modal" class="button secondary popup-modal" target="_blank">Otras encuestas</a>
						<div id="other-surveys-modal" class="mfp-hide white-popup-block">
							<table width="100%" class="color-white">
								<thead>
								<tr>
									<th>Encuesta</th>
									<th>Fecha</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($surveys as $survey) { ?>
									<tr>
										<td><?= strtoupper($survey->$lang->title) ?></td>
										<td><?= $survey->date ?></td>
										<td align="right">
											<a href="<?= $survey->$lang->link_results ?>" class="button secondary btn-sm other-surveys-action" target="_blank">Resultados</a>
											<a href="<?= $survey->$lang->link_analysis ?>" class="button secondary btn-sm other-surveys-action" target="_blank">Análisis</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							<p align="center"><a class="popup-modal-dismiss button default " href="#">Cerrar</a></p>
						</div>
					</li>
				</ul>
			</footer>
		</section>

		<!-- Introduction -->
		<section id="intro" class="main">
			<div class="container-width">
				<div class="spotlight">
					<div class="content">
						<div class="major">
							<h2 class="font_2">CUBA ES UN MERCADO <span class="bold">INCIERTO</span>, NOSOTROS TE OFRECEMOS <span class="bold">INTEL</span></h2>
						</div>
					</div>
					<div>
						<ul id="work">
							<li>
								<p>MEDIOS INFORMATIVOS</p>
								<p>Conviértete en una autoridad. Sondea el estado de opinión de los cubanos en la Isla.</p>
							</li>
							<li>
								<p>SECTOR PRIVADO</p>
								<p>Optimiza tus servicios. Averigua qué piensan los potenciales consumidores de tus productos.</p>
							</li>
							<li>
								<p>SOCIEDAD CIVIL</p>
								<p>Profundiza en quiénes son y qué piensan las fuerzas más vivas de la sociedad cubana.</p>
							</li>
							<li>
								<p>INVESTIGACIÓN</p>
								<p>¿Desarrollas un estudio o una investigación académica? Accede a datos verificables y validados científicamente.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="second" class="main special">
			<div class="container-width">
				<header class="major">
					<h2 class="font_2">¿POR QUÉ <span class="bold">NOSOTROS</span>?</h2>
				</header>
				<ul class="statistics">
					<li class="style2">
						<img src="/images/whyus-trust.png" alt="whyus-trust" width="80" height="80">
						<p>DATOS EN LOS QUE PUEDES CONFIAR</p>
						<p>Contactamos con miles de personas en la Isla de manera anónima, individual y verificable. Así obtenemos respuestas para cualquier pregunta que puedas tener.</p>
					</li>
					<li class="style3">
						<img src="/images/whyus-perfection.png" alt="whyus-perfection" width="80" height="80">
						<p>ENFOCADOS EN LA PERFECCIÓN</p>
						<p>Nuestro alcance se extiende a todo el país, con muestras disgregadas por edad, género, nivel educativo, lugar de residencia, etc. Garantizamos la máxima precisión posible en los resultados.</p>
					</li>
					<li class="style5">
						<img src="/images/whyus-wheel.png" alt="whyus-wheel" width="80" height="80">
						<p>SIEMPRE DETRÁS DEL VOLANTE</p>
						<p>Nuestro equipo de expertos le ayudará a diseñar cuestionarios y a analizar científicamente los resultados en base a nuestro conocimiento de la sociedad cubana.</p>
					</li>
				</ul>
			</div>
		</section>

		<!-- First Section -->
		<section id="experts" class="main special">
			<div class="container-width">
				<header class="major">
					<h2 class="font_2">NUESTROS <span class="bold">EXPERTOS</span></h2>
				</header>
				<ul class="features">
					<li>
						<img src="/images/people/ex1.jpeg" width="192" height="222" alt="Armando Chaguaceda">
						<h3>ARMANDO CHAGUACEDA</h3>
						<a href="#test-modal" class="button primary popup-modal">Ver Bio</a></p>
						<div id="test-modal" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>ARMANDO CHAGUACEDA</h1>
								<p>Profesor e Investigador de la Universidad de Guanajuato. Licenciatura en Educación
									(2000) e Historia (2006), Maestría en Ciencias Políticas (2004) y Doctorado en
									Historia y Estudios Regionales (2012). Especializado en el estudio de la relación
									entre sociedad civil, democratización y autoritarismo en América Latina y Rusia.
									Coautor y coordinador de varios libros, así como autor de docenas de artículos
									académicos y de opinión sobre los temas mencionados anteriormente. Ha publicado en
									Estados Unidos, Europa y América Latina, donde también realizó varias conferencias e
									investigaciones.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Cerrar</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/people/ex2.jpeg" width="192" height="222" alt="Juan Manuel Trak">
						<h3>JUAN M TRAK VÁSQUEZ</h3>
						<a href="#test-modal1" class="button primary popup-modal">Ver Bio</a>
						<div id="test-modal1" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>JUAN M TRAK VÁSQUEZ</h1>
								<p>Sociólogo de la Universidad Católica Andrés Bello, con una maestría en Ciencias
									Políticas y un doctorado en Procesos Políticos Contemporáneos de la Universidad de
									Salamanca. Trabajó como coordinador de investigación en el Centro de Estudios
									Políticos de la Universidad Católica Andrés Bello. Sus líneas de investigación son
									la institucionalidad democrática, la cultura política y la opinión pública, la
									representación política, el comportamiento electoral, la integridad electoral, los
									sistemas electorales y la democratización, la política comparada y América
									Latina.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Cerrar</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/people/ex3.jpeg" width="192" height="222" alt="Elaine Acosta Gonzales">
						<h3>ELAINE ACOSTA GONZALEZ</h3>
						<a href="#test-modal2" class="button primary popup-modal">Ver Bio</a></p>
						<div id="test-modal2" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>ELAINE ACOSTA GONZALEZ</h1>
								<p>Doctora en Estudios Internacionales e Interculturales por la Universidad de Deusto
									(Bilbao), Máster en Estudios Sociales y Políticos Latinoamericanos (Chile) y
									Licenciada en Sociología por la Universidad de La Habana. Es investigadora visitante
									en el Centro de Investigación de Cuba de la Universidad Internacional de Florida y
									codirectora del Programa de Investigación Interdisciplinaria sobre Atención, Familia
									y Bienestar. Sus áreas de estudio son el envejecimiento de la población, la
									migración internacional y las políticas de bienestar.</p>
								<p><a class="popup-modal-dismiss button default" href="#">Cerrar</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/people/ex4.png" width="192" height="222" alt="Rodrigo Salazar-Elena">
						<h3>RODRIGO SALAZAR-ELENA</h3>
						<a href="#test-modal3" class="button primary popup-modal">Ver Bio</a></p>
						<div id="test-modal3" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>RODRIGO SALAZAR-ELENA</h1>
								<p>Es doctor en Ciencias Políticas de la UNAM (México). Trabaja como profesor e
									investigador a tiempo completo en la Facultad Latinoamericana de Ciencias Sociales
									(sede en México) y coordinador del Programa de Maestría en Asuntos Públicos y del
									Gobierno en la misma institución. Sus áreas de estudio son la metodología de las
									ciencias sociales, el comportamiento electoral, la economía política, la pobreza y
									la desigualdad. Actualmente trabaja midiendo el impacto del crimen y la desigualdad
									en los patrones de votación en América Latina.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Cerrar</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/people/ex5.jpeg" width="192" height="222" alt="Arístides A. Vara Horna">
						<h3>ARÍSTIDES A. VARA HORNA</h3>
						<a href="#test-modal4" class="button primary popup-modal">Ver Bio</a></p>
						<div id="test-modal4" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>ARÍSTIDES A. VARA HORNA</h1>
								<p>Doctor en Educación y Maestro en Administración y Gerencia Social. Director del Instituto
									de Investigación de la Facultad de Ciencias Administrativas y Recursos Humanos de la
									Universidad de San Martín de Porres (USMP) en Perú. Consultor internacional en la
									estimación de impactos y costos multinivel de la violencia contra las mujeres.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Cerrar</a></p>
							</div>
						</div>
					</li>
				</ul>

				<header class="major">
					<h2 class="font_2">CUBADATA<span class="bold"></h2>
				</header>
				<ul class="core">
					<li>
						<img src="/images/people/pablo.jpeg" width="192" height="222" alt="Pablo Diaz">
						<h3>PABLO DIAZ</h3>
						<p>Cofundador de CubaData. Periodista. Director del <a target="_blank" href="http://www.diariodecuba.com">Diario de Cuba</a>.</p>
					</li>
					<li>
						<img src="/images/people/salvi.png" width="192" height="222" alt="Salvi Pascual">
						<h3>SALVI PASCUAL</h3>
						<p>Programador, emprendedor, profesor universitario y fundador de <a target="_blank"href="http://www.apretaste.org">Apretaste!</a></p>
					</li>
				</ul>
			</div>
		</section>

		<!--App Section-->
		<section id="app" class="main special">
			<header class="major">
				<h2 class="font_2">¿ESTÁS EN CUBA? <span clasS="bold">DESCARGA NUESTRA APP</span></h2>
			</header>
			<footer class="major">
				<ul class="actions special">
					<li><a href="/files/cubaData.apk" class="button primary"><span><img src="/images/android.png" width="30" height="30"></span>Descargar</a></li>
				</ul>
			</footer>
		</section>
		<section id="news" class="main special">
			<div class="container-width">
				<div class="container-fluid">
					<div class="row">
						<?php foreach($press as $item) { ?>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="img-cont">
									<a href="<?= $item->url ?>" target="_blank">
										<img src="/images/press/<?= $item->image ?>" class=" img-rounded" width="190" height="85"> 
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Get Started -->
		<section id="contact" class="">
			<div class="container-width">
				<header class="">
					<h2 class="font_2">DESCUBRE <span class="bold">CUBA</span> POR DENTRO</h2>
				</header>
				<div id="contact-details">
					<h2 class="font_2 bold" id="phone">305-457-1656</h2>
					<h2 class="font_2 bold" id="email">contact@cubadata.com</h2>
				</div>
			</div>
		</section>
	</div>

	<!-- Footer -->
	<footer id="footer">
		<p class="copyright">Copyright © <?= date('Y') ?> by Cuba Data LLC.<br>All Rights Reserved</p>
	</footer>
</div>

<?php include "../common/scripts.php";?>

</body>
</html>
