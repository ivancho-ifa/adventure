<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin page</title>
	</head>

	<body>
		<table style="width:100%">
			<tr><td style="font-size:28px">Админ панел</td></tr>

			<tr><td><a href="viewcategory.php">Категории</a></td></tr>
			<tr><td><a href="viewsubcategory.php">Подкатегории</a></td></tr>
			<tr><td><a href="viewpackage.php">Пакети</a></td></tr>
			<tr><td><a href="viewenquiry.php">Запитвания</a></td></tr>
		</table>
	</body>
</html>
