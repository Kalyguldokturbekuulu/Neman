<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="style.css ">
</head>
<body><div id="login">
	<?php
		$login2=$_POST['login'];
		$pass2=$_POST['password'];

		$mysql = $link;
		$user =mysqli_query($link,"SELECT * FROM `authorization` WHERE `login`='$login2' AND
		`password`='$pass2'");
		//echo mysqli_num_rows($user);
		echo "</br>";

		if(mysqli_num_rows($user)>0){
			echo "Вы успешно авторизовались!";

		$user1 =mysqli_query($link,"SELECT * FROM `authorization`  WHERE `login`='$login2'");
			if(mysqli_num_rows($user1)>0){
			$row = mysqli_fetch_array($user1);

									echo'

							<p>'.'Добро пожаловать! '.$row['FIO'].'</p>

					 	  ';


		}
				 ?>
			<div id="sms">
				<form action="login.php" method="post">
					<input class="btn1"type="submit"value="приступит к работе">
				</form>
			</div>

			<?php
		}else{
			?>
			<h3>Не правильный логин пароль!</h3>
			<p>Чтобы повторить заново нажмите кнопку внизу!</p>
			<form action="index.php"method="post">
					<button class="btn2"></button>
				</form>
				<div class="haha"></div>
			<?php
			exit();
		}
	?>
	</div>
</body>
</html>