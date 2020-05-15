<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>изменить</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="sms">
<?php
include"db_connect.php";

$id = $_GET['del'];
$kol = $_POST['pole1'];
$harakter = $_POST['pole2'];
if(($harakter=='')&&($kol=='')){
	echo "Вы ничего не изменили";
	?>
<div>
		<form action="obrobotka2.php?del=<?=$id?>" method="post">
			<?php $id = $_GET['del']; ?>
			<input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
	</div>
	<?php

}
if(($harakter!='')&&($kol!='')){
	if(($kol>=0)&&(is_numeric($kol))){
 $query = "UPDATE `product` SET `kol` = '$kol',`harakter` = '$harakter'
  WHERE `product`.`id` = '$id'  ";
   mysqli_query($link, $query)
    or die('Error querying database.');

  echo 'Данные изменины!'?>
		<form action="login.php" method="post">
		     <input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
  <?php
}else{
	echo'извените, убедитесь правильно ли указали данные!:';?>
<div>
		<form action="obrobotka2.php?del=<?=$id?>" method="post">
			<?php $id = $_GET['del']; ?>
			<input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
	</div>
	<?php
}
exit();
}
if($harakter!=''){
$query = "UPDATE `product` SET `harakter` = '$harakter'
  WHERE `product`.`id` = '$id'  ";
   mysqli_query($link, $query)
    or die('Error querying database.');
     echo 'Данные изменины!'?>
		<form action="login.php" method="post">
		     <input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
  <?php

}
if($kol!=''){
if(($kol>=0)&&(is_numeric($kol))){
 $query = "UPDATE `product` SET `kol` = '$kol'
  WHERE `product`.`id` = '$id'  ";
   mysqli_query($link, $query)
    or die('Error querying database.');

  echo 'Данные изменины!'?>
		<form action="login.php" method="post">
		     <input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
  <?php
}else{
	echo'извените, убедитесь правильно ли указали данные!:';?>
<div>
		<form action="obrobotka2.php?del=<?=$id?>" method="post">
			<?php $id = $_GET['del']; ?>
			<input style="margin-top: 50px;background-color: #0069C9;color:white;border-radius: 40px;"type="submit"value="назад">
		</form>
	</div>
	<?php
}

}
  mysqli_close($link);
 ?>
 </div>
 </body>
</html>