<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Категория</title>

		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/stylecss.css" rel='stylesheet' type='text/css'/>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<?php include('connect-to-db.php'); ?>
		<?php include('navigation.php'); ?>

		<img src="images/beach3.jpg" width="100%" />

		<div style="height:50px"></div>

		<div style="width:1000px; margin:auto; margin-bottom:300px" >
			<div style="width:200px; float:left">
				<table cellpadding="0" cellspacing="0" width="1000px">
					<tr>
						<td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F">
							<b>Категория</b>
						</td>
					</tr>

					<?php
						$s="select * from category";
						$result=mysqli_query($cn,$s);
						$r=mysqli_num_rows($result);

						while($data=mysqli_fetch_array($result)) {
							echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
						}

						mysqli_close($cn);
					?>
				</table>
			</div>

			<div style="width:800px; float:left">
				<table cellpadding="0px" cellspacing="0" width="1000px">
					<tr>
						<td class="headingText">Добре дошли в Пътешествие!</td>
					</tr>

					<tr>
						<td class="paraText" width="900px">
							Създайте мечтаната си почивка!
							Правете каквото хресвате! Правете каквото обичате!
							Печете се на слънце, пляскайте се в морето, галерии, кюфтета, кебапчета...
							Нека Ви помогнем с организацията!
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div style="clear:both"></div>
	</body>
</html>
