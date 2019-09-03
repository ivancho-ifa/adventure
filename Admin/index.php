<?php if(!isset($_SESSION)) { session_start(); } ?>


<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>

		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<?php
			if($_SESSION['loginstatus']=="")
			{
				header("location:loginform.php");
			}
		?>

		<?php include('navigation.php'); ?>

		<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
			<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
				<?php include('admin-menu.php'); ?>
			</div>

			<div class="col-sm-9" align="center">
				<img src="../images/adminpics/ert.jpg" style="padding-top:40px"  width="500px" height="400px"/>
			</div>
		</div>
	</body>
</html>
