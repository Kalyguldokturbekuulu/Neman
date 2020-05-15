<?php include"db_connect.php";
$id = $_GET['del'];?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Изменить</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="sms">
	<div>
		<form action="obrobotka1.php?del=<?= $id?>" method="post">
			<label>Характеристика:</label><br>
			<textarea name="pole2" id="" cols="30" rows="10">
				<?php
		$user = mysqli_query($link,"SELECT * FROM `product` WHERE `id`='$id'");
		if($user==true){
			$row = mysqli_fetch_array($user);
			echo ''.$row['harakter'].'';
		}
				 ?>
			</textarea><br>
			<label>Количество:</label><br>
			<input type="text" name="pole1" value="		<?php
		$user = mysqli_query($link,"SELECT * FROM `product` WHERE `id`='$id'");
		if($user==true){
			$row = mysqli_fetch_array($user);
			echo ''.$row['kol'].'';
		}
				 ?>"><br>
			<input class="btn" type="submit"name="button_id"><br>
		</form>
		<form action="login.php" method="post">
		     <input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
	</div>
	<?php
	$id = $_GET['del'];
	if(isset( $_POST['button_id'])){
		$id = $_GET['del'];


		 $query = "UPDATE `product` SET `kol` = '$kol',`harakter` = '$harakter'
		  WHERE `product`.`id` = '$id'  ";
		   mysqli_query($link, $query)
		    or die('Error querying database.');
	}
	 ?>
	 </div>
</body>
</html>
