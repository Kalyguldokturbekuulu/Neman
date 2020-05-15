<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>удаление записов</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="sms">
	<?php

  $link = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

  $name = $_GET['delete'];

  $query = "DELETE FROM product WHERE name = '$name'";
  mysqli_query($link, $query)
    or die('Error querying database.');


  echo   $name.' удалено! ';

  mysqli_close($link);
?>

		<form action="login.php" method="post">
			<button class="btn"> назад</button>
		</form>
	</div>
</body>
</html>