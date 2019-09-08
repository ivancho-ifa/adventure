<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN</title>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<link href="../css/admin-style.css" rel="stylesheet" type="text/css" />
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<?php include('../connect-to-db.php'); ?>

		<?php
			$_SESSION['loginstatus']="";
			if(isset($_POST["sbmt"]))
			{
				$s="select * from users where Username='" . htmlspecialchars($_POST["t1"], ENT_QUOTES, 'UTF-8') . "' and Pwd='" . htmlspecialchars($_POST["t2"], ENT_QUOTES, 'UTF-8') ."'";

				$q=mysqli_query($cn,$s);
				$r=mysqli_num_rows($q);
				$data=mysqli_fetch_array($q);

				if($r>0) {
					$_SESSION["Username"]= $_POST["t1"];
					$_SESSION["usertype"]=$data[2];
					$_SESSION['loginstatus']="yes";
					header("location:index.php");
				} else {
					echo "<script>alert('Invalid User Name or Password');</script>";
				}
			}
		?>

		<?php include('topforlogin.php'); ?>

		<div style="padding-top:150px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
			<div class="col-sm-3" style=" min-height:450px;">
			</div>

			<div class="col-sm-9">
				<form method="post">
					<table border="0" width="500px" height="400px" align="left" class="tableshadow">
						<tr>
							<td colspan="2" class="toptd"><img src="../images/adminpics/lo.jpg" width="550px" height="100px" /></td>
						</tr>

						<tr>
							<td><img src="../images/adminpics/gggh.jpg" width="200px" height="200px" /></td>
							<td class="lefttxt">
								<table border="0" width="100px" height="200px">
									<td>User Name</td>
							</td>

							<td><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Въведете между 1-50 английски букви, интервал или _" /></td>
						</tr>

						<tr>
							<td class="lefttxt">Password</td>
							<td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Въведете между 1-10 английски букви или цифри" /></td>
						</tr>
								</table>

						<tr>
							<td></td>
							<td align="center" ><input type="submit" value="LOGIN" name="sbmt" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
