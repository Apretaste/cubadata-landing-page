<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<title>CubaData: <?= $title ?></title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="/images/cubadata_icon.png">
		<?php require BASE_PATH . 'google-analytics.inc'; ?>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Main -->
			<div id="main">
				<div class="inner">
					<!-- Header -->
					<header id="header">
						<span>
							<a href="/">
								<img src="images/cubadata_logo_horizontal.png" width="133" height="37" alt="CubaData Logo"/>
							</a>
						</span>
<!-- 
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
						</ul>
-->
					</header>

					<!-- Template -->
					{TEMPLATE}
				</div>
			</div>

			<!-- Sidebar -->
			<div id="sidebar">
				<div class="inner">
					<!-- Menu -->
					<nav id="menu">
						<header class="major">
							<h2>Navegación</h2>
						</header>
						<ul>
							<li><a href="/">Inicio</a></li>
							<li><a href="/surveys">Encuestas</a></li>
							<li><a href="/team">Equipo</a></li>
							<li><a href="/metodology">Metodología</a></li>
							<li><a href="/ethics">Ética</a></li>
						</ul>
					</nav>

					<!-- Section -->
					<section>
						<div class="mini-posts">
							<article>
								<a href="#" class="image"><img src="images/surveys/percepcion-de-los-cubanos-sobre-la-actuacion-del-gobierno-ante-el-covid-19.png" alt="Percepción de los cubanos sobre la actuación del gobierno ante el Covid-19" /></a>
								<h3>Percepción de los cubanos sobre la actuación del gobierno ante el Covid-19.</h3>
							</article>
						</div>
						<ul class="actions">
							<li><a href="/surveys" class="button">Más encuestas</a></li>
						</ul>
					</section>

					<!-- Section -->
					<section>
						<header class="major">
							<h2>Contáctanos</h2>
						</header>
						<ul class="contact">
							<li class="icon solid fa-envelope"><a href="#">contact@cubadata.com</a></li>
							<li class="icon solid fa-phone">305-457-1656</li>
						</ul>
					</section>

					<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Copyright &copy; <?= date('Y') ?> by Cuba Data LLC. All Rights Reserved</p>
					</footer>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>