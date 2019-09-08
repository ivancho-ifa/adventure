<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Записване</title>

		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<link href="css/stylecss.css" rel='stylesheet' type='text/css'/>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<?php include('connect-to-db.php'); ?>

		<?php
			if(isset($_POST["sbmt"]))
			{
				$stmt =
					$cn->prepare("insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('"
					. $_REQUEST["pid"] ."',"
					. " ? " . ","
					. " ? " . ","
					. " ? " . ","
					. " ? " . ","
					. " ? " . ","
					. " ? " . ","
					. " ? " . ","
					. " ? " . ","
					. "'Pending')");

				$t1 = htmlspecialchars($_POST["t1"], ENT_QUOTES, 'UTF-8');
				$r1 = htmlspecialchars($_POST["r1"], ENT_QUOTES, 'UTF-8');
				$t2 = htmlspecialchars($_POST["t2"], ENT_QUOTES, 'UTF-8');
				$t3 = htmlspecialchars($_POST["t3"], ENT_QUOTES, 'UTF-8');
				$t4 = htmlspecialchars($_POST["t4"], ENT_QUOTES, 'UTF-8');
				$t5 = htmlspecialchars($_POST["t5"], ENT_QUOTES, 'UTF-8');
				$t6 = htmlspecialchars($_POST["t6"], ENT_QUOTES, 'UTF-8');
				$t7 = htmlspecialchars($_POST["t7"], ENT_QUOTES, 'UTF-8');

				$stmt->bind_param('ssssddds',
					$t1, $r1, $t2, $t3, $t4, $t5, $t6, $t7);

				$stmt->execute();

				echo "<script>alert('Record Save');</script>";
			}
		?>

		<?php include('navigation.php'); ?>

		<img src="images/beach3.jpg" width="100%" />

		<div style="height:50px"></div>
			<div style="width:1000px; margin:auto"  >
				<div style="width:200px; font-size:18px; color:#09F; float:left">
					<table cellpadding="0" cellspacing="0" width="1000px">
						<tr><td style="font-size:18px" color="#09F">Категория</td></tr>

						<?php
							$s="select * from category";
							$result=mysqli_query($cn,$s);
							$r=mysqli_num_rows($result);

							while($data=mysqli_fetch_array($result)) {
								echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";
							}
						?>

					</table>
				</div>

				<div style="width:800px; float:left">
				<table cellpadding="0px" cellspacing="0" width="1000px">
					<tr><td class="headingText">Заявка</td></tr>

					<tr>
						<td class="paraText" width="900px">
							<table cellpadding="0" cellspacing="0" width="900px">
								<td>
									<table border="0"; width="600px" height="400px" align="center" >
										<?php
											$s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";
											$result=mysqli_query($cn,$s);
											$r=mysqli_num_rows($result);

											$data=mysqli_fetch_array($result);
											mysqli_close($cn);
										?>

										<form method="post" enctype="multipart/form-data">
											<tr><td colspan="3" class="middletext">ID на пакет:<?php echo $data[0];?></td></tr>
											<tr><td colspan="3" class="middletext">Име на пакет:<?php echo $data[1];?></td></tr>
											<tr><td class="lefttxt">Име:</td><td><input type="text" name="t1" required pattern="[а-яА-я1 ]{3,50}" title="Въведете между 3-50 английски букви или интервал"/></td></tr><br/>
											<tr><td class="lefttxt">Пол:</td><td><input type="radio" name="r1" value="Male" checked="checked" />Мъж<input type="radio" name="r1"  value="Female"/>Жена</td></tr><br/>
											<tr><td class="lefttxt">Телефон:</td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title="Въведете между 10-12 цифри"/></td></tr><br/>
											<tr><td class="lefttxt">Мейл:</td><td><input type="email" name="t3" required /></td><td><br/>
											<tr><td class="lefttxt">Дни:</td><td><input type="number" name="t4" required pattern="[1 _]{1,20}" title="Числа"/></td><td><br/>
											<tr><td class="lefttxt">Деца:</td><td><input type="number" name="t5" required pattern="[1 _]{1,10}" title="Числа"/></td><td><br/>
											<tr><td class="lefttxt">Възрастни:</td><td><input type="number" name="t6" required pattern="[1 _]{1,20}" title="Числа"/></td><td><br/>
											<tr><td class="lefttxt">Съобщение:</td><td><textarea name="t7" required="required"></textarea></td><td><br/>
											<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>
										</form>
									</table>
								</td>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div style="clear:both"></div>
	</body>
</html>
