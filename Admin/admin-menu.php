<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin page</title>
	</head>

	<body>
		<table style="width:100%">
			<tr><td style="font-size:28px">Admin Links</td></tr>

			<tr><td><a href="viewcategory.php">View Category</a></td></tr>
			<tr><td><a href="viewsubcategory.php">View Subcategory</a></td></tr>
			<tr><td><a href="viewpackage.php">View Package</a></td></tr>
			<tr><td><a href="viewenquiry.php">View Enquiry</a></td></tr>
		</table>
	</body>
</html>
