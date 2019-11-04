<?php $lang = "en" ?>
<?php include "../common/head.php" ?>

<body>
<header id="header" class="alt">
	<div class="container-width">
			<span id="idiom">
				<img src="/images/blank.gif" width="1" height="1" class="flag flag-cu" alt="cuba"/>
				<input type="checkbox" class="js-switch" name="name2" checked/>
				<img src="/images/blank.gif" width="1" height="1" class="flag flag-us" alt="english"/>
			</span>
		<div id="text">
			<h2 class="font_2">
				<span class="big">PLEASE, ASK<br>
				<span class="bold">ANYTHING</span><br>ABOUT <span class="bold">CUBA</span></span>
			</h2>
			<p>We specialize in Market Research at the Island. When you need data, you are not alone anymore.</p>
		</div>
		<div id="but"><a href="#report" class="button default" id="show">See Research Results</a></div>
	</div>
</header>

<!-- Wrapper -->
<div id="wrapper">
	<!-- Nav -->
	<nav id="nav" class="alt">
		<div class="container-width">
			<img src="/images/cubadata_logo.png" alt="logo cubadata" width="133" height="78">
			<ul>
				<li><a href="#intro" class="active">OUR WORK</a></li>
				<li><a href="#second">WHY US?</a></li>
				<li><a href="#report">OUR REPORT</a></li>
				<li><a href="#experts">TEAM</a></li>
				<li><a href="#news">PRESS</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li>
					<img src="/images/blank.gif" width="1" height="1" class="flag flag-cu" alt="cuba"/>
					<input type="checkbox" class="js-switch" id="idiom-main" name="idiom1" checked/>
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
				<p>Take a look at our latest survey, and find out what Cubans really think.</p>
			</header>
			<footer class="major">
				<ul class="actions special">
					<li><a href="<?= $surveys[0]->$lang->link_results ?>" class="button primary" target="_blank">See Results</a></li>
					<li><a href="<?= $surveys[0]->$lang->link_analysis ?>" class="button primary" target="_blank">See Analysis</a></li>
					<li>
						<a href="#other-surveys-modal" class="button secondary popup-modal" target="_blank">Other surveys</a>
						<div id="other-surveys-modal" class="mfp-hide white-popup-block">
							<table width="100%">
								<thead>
								<tr>
									<th>Survey</th>
									<th>Date</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								 <?php foreach($surveys as $survey) { ?>
									<tr>
										<td> <?= strtoupper($survey->$lang->title) ?></td>
										<td><?= $survey->date ?></td>
										<td align="right">
											<a href="<?= $survey->$lang->link_results ?>" class="button secondary btn-sm other-surveys-action" target="_blank">Results</a>
											<a href="<?= $survey->$lang->link_analysis ?>" class="button secondary btn-sm other-surveys-action" target="_blank">Analysis</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							<p align="center"><a class="popup-modal-dismiss button default " href="#">Close</a></p>
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
							<h2 class="font_2">CUBA IS AN <span class="bold">UNCERTAIN</span> MARKET, LET US FEED YOU
								WITH <span class="bold">INTEL</span></h2>
						</div>
					</div>
					<div>
						<ul id="work">
							<li>
								<p>RADIO, TV AND NEWS</p>
								<p>Be a media authority. Let us get you an honest state of opinion about the hottest trends in Cuba.</p>
							</li>
							<li>
								<p>PRIVATE SECTOR</p>
								<p>Optimize your services and products. Let us find what is in the mind of your audience in Cuba.</p>
							</li>
							<li>
								<p>CIVIL SOCIETY</p>
								<p>Understand how your followers are composed, their most pressing issues and biggest concerns.</p>
							</li>
							<li>
								<p>RESEARCH</p>
								<p>Writing a book or paper? Let us give you the reliable and statistically significant data you require.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- why us -->
		<section id="second" class="main special">
			<div class="container-width">
				<header class="major">
					<h2 class="font_2">WHY <span class="bold">US</span>?</h2>
				</header>
				<ul class="statistics">
					<li class="style2">
						<img src="/images/whyus-trust.png" alt="whyus-trust" width="80" height="80">
						<p>DATA YOU CAN TRUST YOUR LIFE</p>
						<p>We contact anonymously thousands of subscriptors in the island. That is how we get you unbiased, honest and direct answers to basically any questions you may have.</p>
					</li>
					<li class="style3">
						<img src="/images/whyus-perfection.png" alt="whyus-perfection" width="80" height="80">
						<p>FOCUSED ON PERFECTION</p>
						<p>Our subscriptors are spread over the country, and our samples are segmented by age, gender, education, location and more, to ensure maximum accuracy on the results.</p>
					</li>
					<li class="style4">
						<img src="/images/whyus-wheel.png" alt="whyus-wheel" width="80" height="80">
						<p>ALWAYS BEHIND THE WHEEL</p>
						<p>We will help you coming up with questions, translations, and our experts will analyze the results based on their knowledge of the Cuban culture and society.</p>
					</li>
				</ul>
			</div>
		</section>


		<!-- First Section -->
		<section id="experts" class="main special">
			<div class="container-width">
				<header class="major">
					<h2 class="font_2">OUR <span class="bold">EXPERTS</span></h2>
				</header>

				<ul class="features">
					<li>
						<img src="/images/ex1.jpeg" alt="ARMANDO CHAGUACEDA" width="192" height="222">
						<h3>ARMANDO CHAGUACEDA</h3>
						<a href="#test-modal" class="button primary popup-modal">Read Bio</a></p>
						<div id="test-modal" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>ARMANDO CHAGUACEDA</h1>
								<p>Professor and Researcher from the University of Guanajuato. Bachelor of Education
									(2000) and History (2006), Master in Political Science (2004) and PhD in History and
									Regional Studies (2012). Specialized in the study of the relationship between civil
									society, democratization and authoritarianism in Latin America and Russia. Co-author
									and coordinator of several books, as well as author of dozens of academic and
									opinion papers on the topics mentioned before. He has published in the US, Europe
									and Latin America, where he also conducted several conferences and research.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Close</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/ex2.jpeg" width="192" height="222" alt="Juan Trak Vazquez">
						<h3>JUAN M TRAK VÁSQUEZ</h3>
						<a href="#test-modal1" class="button primary popup-modal">Read Bio</a>
						<div id="test-modal1" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>JUAN M TRAK VÁSQUEZ</h1>
								<p>Sociologist from the Andrés Bello Catholic University, with a Master's degree in
									Political Science and a doctorate in Contemporary Political Processes from the
									University of Salamanca. He worked as a research coordinator at the Center for
									Political Studies of the Andrés Bello Catholic University. His lines of research are
									democratic institutionalism, political culture and public opinion, political
									representation, electoral behavior, electoral integrity, electoral systems and
									democratization, comparative politics and Latin America. to our reports and find out
									what Cubans really think.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Close</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/ex3.jpeg" alt="ELAINE ACOSTA GONZALEZ" width="192" height="222">
						<h3>ELAINE ACOSTA GONZALEZ</h3>
						<a href="#test-modal2" class="button primary popup-modal">Read Bio</a></p>
						<div id="test-modal2" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>ELAINE ACOSTA GONZALEZ</h1>
								<p>PhD in International and Intercultural Studies from the University of Deusto
									(Bilbao), Master in Latin American Social and Political Studies (Chile) and Bachelor
									in Sociology from the University of Havana. She is a visiting researcher at the Cuba
									Research Center of the International University of Florida and co-director of the
									Interdisciplinary Research Program on Care, Family and Welfare. His areas of study
									are the aging of the population, international migration and welfare policies.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Close</a></p>
							</div>
						</div>
					</li>
					<li>
						<img src="/images/ex4.png" alt="RODRIGO SALAZAR-ELENA" width="192" height="222">
						<h3>RODRIGO SALAZAR-ELENA</h3>
						<a href="#test-modal3" class="button primary popup-modal">Read Bio</a></p>
						<div id="test-modal3" class="mfp-hide white-popup-block">
							<div class="data-modal">
								<h1>RODRIGO SALAZAR-ELENA</h1>
								<p>He holds a PhD in Political Science from UNAM (Mexico). He works as a full-time
									professor and researcher at the Latin American Faculty of Social Sciences (based in
									Mexico) and coordinator of the Master's Program in Public Affairs and Government at
									the same institution. His areas of study are the methodology of the social sciences,
									electoral behavior, political economy, poverty and inequality. He currently works
									measuring the impact of crime and inequality in voting patterns in Latin
									America.</p>
								<p><a class="popup-modal-dismiss button default " href="#">Close</a></p>
							</div>
						</div>
					</li>
				</ul>

				<header class="major">
					<h2 class="font_2"><span class="bold">CUBADATA</span></h2>
				</header>
				<ul class="core">
					<li>
						<img src="/images/pablo.jpeg" alt="PABLO DIAZ" width="192" height="222">
						<h3>PABLO DIAZ</h3>
						<p>Co-founder of CubaData. Journalist. Director of <a target="_blank" href="http://www.diariodecuba.com">Diario de Cuba</a>.</p>
					</li>
					<li>
						<img src="/images/team-salvi.png" alt="SALVI PASCUAL" width="192" height="222">
						<h3>SALVI PASCUAL</h3>
						<p>Coder, Entrepreneur, and University Professor. Founder of <a target="_blank" href="http://www.apretaste.org">Apretaste!</a></p>
					</li>
				</ul>
			</div>
		</section>

		<!-- App -->
		<section id="app" class="main special">
			<header class="major">
				<h2 class="font_2">ARE YOU IN CUBA? <span clasS="bold">DOWNLOAD OUR APP</span></h2>
			</header>
			<footer class="major">
				<ul class="actions special">
					<li>
						<a href="/files/cubaData.apk" class="button primary"><span><img src="/images/android.png" width="30" height="30"></span>Download</a>
					</li>
				</ul>
			</footer>
		</section>

		<!-- News -->
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
					<h2 class="font_2">QUENCH THE <span class="bold">THIRST</span> ABOUT <span class="bold"> CUBA</span>
					</h2>
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

<?php include "../common/scripts.php" ?>
</body>
</html>
