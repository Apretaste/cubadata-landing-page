<?php $lang = "es"; ?>
<?php include "../common/head.php"; ?>
<body>
<header id="header" class="alt">
    <div class="container-width">
				<span id="idiom">
					<img src="/images/blank.gif" width="1" height="1" class="flag flag-cu" alt="cuba"/><input
                            type="checkbox" class="js-switch" name="name2"/>
                    <img src="/images/blank.gif" width="1"
                         height="1" class="flag flag-us"
                         alt="english"/>
				</span>
        <div id="text">
            <h2 class="font_2"><span class="big">PREGÚNTANOS <br>
                    <span class="bold">CUALQUIER COSA</span><br> SOBRE <span class="bold">CUBA</span></span></h2>
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
                <li><img src="/images/blank.gif" width="1" height="1" class="flag flag-cu" alt="cuba"/>
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
                <h2 class="font_2"><?php echo strtoupper($surveys[0]->es->title); ?></h2>
                <p>Accede a nuestra última encuesta, e infórmate sobre qué piensan realmente los cubanos</p>
            </header>
            <footer class="major">
                <ul class="actions special">
                    <li><a href="<?php echo $surveys[0]->link_results; ?>" class="button primary" target="_blank">Ver
                            Resultados</a></li>
                    <li><a href="<?php echo $surveys[0]->link_analysis; ?>" class="button primary" target="_blank">Ver
                            Análisis</a></li>
                    <li><a href="#other-surveys-modal" class="button secondary popup-modal" target="_blank">Otras
                            encuestas</a>
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
								<?php foreach($surveys as $survey): ?>
                                    <tr>
                                        <td><?php echo strtoupper($survey->es->title); ?></td>
                                        <td><?php echo $survey->date; ?></td>
                                        <td align="right">
                                            <a href="<?php echo $survey->link_results; ?>" class="button secondary btn-sm"
                                               target="_blank">Resultados</a>
                                            <a href="<?php echo $survey->link_analysis; ?>"
                                               class="button secondary btn-sm" target="_blank">An&aacute;lisis</a>
                                        </td>
                                    </tr>
								<?php endforeach; ?>
                                </tbody>
                            </table>
                            <p align="center"><a class="popup-modal-dismiss button default " href="#">Cerrar</a></p>
                        </div>
                    </li>
                </ul>
            </footer>
        </section>
        <!--
						<section id="slider">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>

								<div class="carousel-inner">
									<div class="item active"><img src="/images/chart3.png" alt="data1"></div>
									<div class="item"><img src="/images/chart4.png" alt="data2"></div>
									<div class="item"><img src="/images/chart5.png" alt="data3"></div>
									<div class="item"><img src="/images/chart6.png" alt="data4"></div>
								</div>

								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</section>
		-->
        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="container-width">
                <div class="spotlight">
                    <div class="content">
                        <div class="major">
                            <h2 class="font_2">CUBA ES UN MERCADO <span class="bold">INCIERTO</span>, NOSOTROS TE
                                OFRECEMOS <span class="bold">INTEL</span></h2>
                        </div>
                    </div>
                    <div>
                        <ul id="work">
                            <li>
                                <p>MEDIOS INFORMATIVOS</p>
                                <p>Conviértete en una autoridad. Sondea el estado de opinión de los cubanos en la
                                    Isla.</p>
                            </li>
                            <li>
                                <p>SECTOR PRIVADO</p>
                                <p>Optimiza tus servicios. Averigua qué piensan los potenciales consumidores de tus
                                    productos.</p>
                            </li>
                            <li>
                                <p>SOCIEDAD CIVIL</p>
                                <p>Profundiza en quiénes son y qué piensan las fuerzas más vivas de la sociedad
                                    cubana.</p>
                            </li>
                            <li>
                                <p>INVESTIGACIÓN</p>
                                <p>¿Desarrollas un estudio o una investigación académica? Accede a datos verificables y
                                    validados científicamente.</p>
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
                        <p>Contactamos con miles de personas en la Isla de manera anónima, individual y verificable. Así
                            obtenemos respuestas para cualquier pregunta que puedas tener.</p>
                    </li>
                    <li class="style3">
                        <img src="/images/whyus-perfection.png" alt="whyus-perfection" width="80" height="80">
                        <p>ENFOCADOS EN LA PERFECCIÓN</p>
                        <p>Nuestro alcance se extiende a todo el país, con muestras disgregadas por edad, género, nivel
                            educativo, lugar de residencia, etc. Garantizamos la máxima precisión posible en los
                            resultados.</p>
                    </li>
                    <li class="style5">
                        <img src="/images/whyus-wheel.png" alt="whyus-wheel" width="80" height="80">
                        <p>SIEMPRE DETRÁS DEL VOLANTE</p>
                        <p>Nuestro equipo de expertos le ayudará a diseñar cuestionarios y a analizar científicamente
                            los resultados en base a nuestro conocimiento de la sociedad cubana.</p>
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
                        <img src="/images/ex1.jpeg" width="192" height="222" alt="Armando Chaguaceda">
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
                        <img src="/images/ex2.jpeg" width="192" height="222" alt="Juan Manuel Trak">
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
                        <img src="/images/ex3.jpeg" width="192" height="222" alt="Elaine Acosta Gonzales">
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
                        <img src="/images/ex4.png" width="192" height="222" alt="Rodrigo Salazar-Elena">
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
                </ul>

                <header class="major">
                    <h2 class="font_2">CUBADATA<span class="bold"></h2>
                </header>
                <ul class="core">
                    <li>
                        <img src="/images/pablo.jpeg" width="192" height="222" alt="Pablo Diaz">
                        <h3>PABLO DIAZ</h3>
                        <p>Cofundador de CubaData. Periodista. Director del <a target="_blank"
                                                                               href="http://www.diariodecuba.com">Diario
                                de Cuba</a>.</p>
                    </li>
                    <li>
                        <img src="/images/team-salvi.png" width="192" height="222" alt="Salvi Pascual">
                        <h3>SALVI PASCUAL</h3>
                        <p>Programador, emprendedor, profesor universitario y fundador de <a target="_blank"
                                                                                             href="https://apretaste.com">Apretaste!</a>
                        </p>
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
                    <li><a href="/files/cubaData.apk" class="button primary"><span><img src="/images/android.png"
                                                                                        width="30" height="30"></span>Descargar</a>
                    </li>
                </ul>
            </footer>
        </section>
        <section id="news" class="main special">
            <div class="container-width">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="http://www.diariodecuba.com/cuba/1532904085_40973.html" target="_blank"><img
                                            src="/images/press/diariodecuba.png" class=" img-rounded" width="190"
                                            height="85"> </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="https://www.cubanet.org/noticias/encuesta-cubanos-cuba-propiedad-privada-libertades-individuales/"
                                   target="_blank"><img src="/images/press/cubanet.png" class=" img-rounded" width="190"
                                                        height="85"> </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="https://www.martinoticias.com/a/sondeo-descontentos-cubanos-quieren-mas-negocios-privados-libertad-politica/191176.html"
                                   target="_blank"><img src="/images/press/marti.png" class=" img-rounded" width="190"
                                                        height="85"> </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="https://www.diariolasamericas.com/america-latina/los-cubanos-quieren-autonomia-sus-negocios-pluralismo-politico-y-elegir-presidente-segun-encuesta-n4158965"
                                   target="_blank"><img src="/images/press/diariolasamericas.png" class=" img-rounded"
                                                        width="190" height="85"> </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="https://www.infobae.com/america/america-latina/2018/07/31/el-61-por-ciento-de-los-cubanos-quiere-cambiar-la-constitucion-y-establecer-elecciones-directas-para-el-cargo-de-presidente/"
                                   target="_blank"><img src="/images/press/infobae.png" class=" img-rounded" width="190"
                                                        height="85"></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="http://www.cubaenmiami.com/encuesta-en-cuba-gran-mayoria-de-los-cubanos-cree-que-los-servicios-de-educacion-y-salud-no-son-buenos/ "
                                   target="_blank"><img src="/images/press/cubaenmiami.png" class=" img-rounded"
                                                        width="190" height="85"></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="img-cont">
                                <a href="https://www.cubacomunica.com/noticias/2018/07/30/sondeo-descontentos-cubanos-quieren-mas-negocios-privados-y-libertad-politica/"
                                   target="_blank"><img src="/images/press/cubacomunica.png" class=" img-rounded"
                                                        width="190" height="85"></a>
                            </div>
                        </div>
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
        <p class="copyright">Copyright © 2018 por Cuba Data LLC. Todos los derechos reservados.</p>
    </footer>
</div>

<?php include "../common/scripts.php"; ?>

</body>
</html>
