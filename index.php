
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="js/jquery.min.js"></script>
	</head>
	<body>

		<?php include('connect-to-db.php'); ?>

		<?php include('top.php'); ?>

		<img src="images/beach4.jpg" width="100%" />

		<div class="about section" id="section-2">
			<div class="about-head text-center">
				<h3>About Us</h3>
				<img src="images/about-img.png">
			</div>
			<div class="container">
				<p>My Tour is a program that prepares individuals to manage travel-related enterprises and related convention and/or tour services. Includes instruction in travel agency management, tour arranging and planning, convention and event planning, travel industry operations and procedures, tourism marketing and promotion strategies, travel counseling, travel industry law, international and domestic operations, and travel and tourism policy.</p>
			</div>
		</div>

		<div  class="section" id="section-3">
			<div id="portfolio" class="portfolio">
				<div class="top-tours-head text-center">
					<h3>Gallery</h3>
					<img src="images/star.png">
				</div>

				<div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t1.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t2.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t3.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t4.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t5.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t6.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t7.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<img src="images/t8.jpg" class="img-responsive"/></a>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</body>
</html>
