
<!DOCTYPE html>
<html>
	<head>
		<title>Пътешествие</title>

		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/stylecss.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include('connect-to-db.php'); ?>
		<?php include('navigation.php'); ?>


		<img src="images/beach4.jpg" width="100%" />

		<div class="about section" id="section-2">
			<div class="about-head text-center">
				<h3>За нас</h3>
				<img src="images/about-img.png">
			</div>
			<div class="container">
				<p>Пътешествие е сайт за резервация на почивки. Базирани сме в София, пътуваме с вас навсякъде по света!</p>
			</div>
		</div>

		<div  class="section" id="section-3">
			<div id="portfolio" class="portfolio">
				<div class="top-tours-head text-center">
					<h3>Галерия</h3>
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
