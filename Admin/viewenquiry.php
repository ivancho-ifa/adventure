<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Преглед на записи</title>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="../css/admin-style.css" rel="stylesheet" type="text/css" />
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

		<?php include('../connect-to-db.php'); ?>

		<?php include('navigation.php'); ?>

		<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
			<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
			<?php include('admin-menu.php'); ?>
			</div>
			<div class="col-sm-9">
				<form method="post">
					<table border="0" width="90%" height="300px" align="center" class="tableshadow">
						<tr><td class="toptd">Преглед на записите</td></tr>

						<tr>
							<td align="center" valign="top" style="padding-top:10px;">
							<table border="0" align="center" width="95%">
								<tr>
									<td style="font-size:15px; padding:5px; font-weight:bold;" >Име на пакета</td>
									<td style="font-size:15px; padding:5px; font-weight:bold; ">ID на пакета</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Име</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Пол</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Телефон</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">имейл</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Дни</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Деца</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Възрастни</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Статус</td>
								</tr>


								<?php
									$s="select * from enquiry,package where enquiry.Packageid=package.Packid";
									$result=mysqli_query($cn,$s);
									$r=mysqli_num_rows($result);

									while($data=mysqli_fetch_array($result))
									{
										echo "<td style=' padding:5px;'>$data[12]</td>
										<td style=' padding:5px;'>$data[1]</td>
										<td style=' padding:5px;'>$data[2]</td>
										<td style=' padding:5px;'>$data[3]</td>
										<td style=' padding:5px;'>$data[4]</td>
										<td style=' padding:5px;'>$data[5]</td>
										<td style=' padding:5px;'>$data[6]</td>
										<td style=' padding:5px;'>$data[7]</td>
										<td style=' padding:5px;'>$data[8]</td>
										<td style=' padding:5px;'><a href='chstatus.php?eid=$data[0]'>$data[10]</a></td>
										</tr>";
									}
								?>

								</table>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
