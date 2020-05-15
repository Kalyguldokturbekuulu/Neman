<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>добавление</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="sms">
		<form action="obrobotka3.php" method="post">
			<label>называние:</label><br>
			<input type="text" name="pole_1"><br>
			<label>характеристика:</label><br>
			<textarea name="pole_2" id="" cols="30" rows="10"></textarea><br>
			<label>количество:</label><br>
			<input type="integer" name="pole_3"><br>
			<input class="btn" type="submit"name="button_id2"value="добавить"><br>
		</form>
	</div>
</body>
</html>