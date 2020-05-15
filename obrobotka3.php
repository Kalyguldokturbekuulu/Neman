<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ошибка!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body><div id="sms">
	<?php
	$name = $_POST['pole_1'];
	$harakter = $_POST['pole_2'];
	$kol = $_POST['pole_3'];
	if(($name=='')||($harakter=='')||($kol=='')){
		echo'добавьте все данные!';?>
		<form action="plus.php" method="post">
			<button class="btn"> назад</button>
		</form>
		<?php
		exit();
	}
	if(is_numeric($kol)){
	 $mysql = $link;
        $mysql -> query("INSERT INTO `product` (`name`,`harakter`,`kol`)
        	VALUES ('$name','$harakter','$kol')");
        $mysql->close();
        echo'Данные добавлены!';
    }else{
    	echo'количество не должно быть буквой!';
    }

	 ?>
	 <form action="login.php" method="post">
			<button class="btn"> назад</button>
		</form>

	</div>

</body>
</html>