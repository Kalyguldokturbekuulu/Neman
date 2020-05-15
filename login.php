<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>котегория лекарств</title>
	<link rel="stylesheet" href="style.css ">
</head>
<body>
	<div class="blok">
			Neman-Storage
			<form action="employee.php" method="post">
				<input type="submit" class="btn4" value="список сотрудников">
			</form>
		<form action="index.php?ex=<?= $exit=1 ?>" method="post">
		<input name="exit"class="btn3"type="submit"value="выйти с аккаунта">

		</form>
	</div>
	<br>
	<br>
	<div class="welcom">
		<?php

		 ?>
	</div>
	<br>
	<br>
	<div class="plus">
		<form action="plus.php" method="post">
			<button class="btn1">+ Добавить</button>
		</form>
	</div>
	<div class="serch">
		<form action="serch.php"method="post">
			<input style="width: 250px; border:1px solid#1E94D0;padding:3px;border-radius: 20px;color:#1E94D0; "name="serch"type="text" placeholder="вводите название или id препората!">
			<input style="background-color: #1E94D0;border-radius: 20px;
		color:#fff;padding: 3px;width: 70px;text-align:center;" type="submit" value="поиск">
		</form>
	</div>
	<br>
	<br>
<div id="table">
	<ul>
	<?php
		$result = mysqli_query($link,"SELECT * FROM `product`");
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);

			do{?>
				<table class="table" cellspacing="0">

					<tr border="1" style="border:1px solid #29B4C5;">
						 <td class="id" >

							<?php
							echo'

							<p>'." id№ ".''.$row['id'].'</p>

					 	  ';?>
				       </td>
				       <td class="name" >
							<?php
							echo'

							<p >'.$row['name'].'</p>

					 	  ';?>
				       </td>
				       <td class="harakter">
							<?php
							echo'

							<p>'.$row['harakter'].'</p>

					 	  ';?>
				       </td>
				       <td class="kol">
							<?php
							echo'
							<p>'." кол: ".''.$row['kol'].'</p>

					 	  ';?>
				       </td>
				       <td style="width: 100px;border:1px solid #29B4C5; text-align:center;">
				       	<form action="" method="post">
				       	<button style="background-color: blue;color:white;
				       	border-radius: 100px;width: 70px;" formaction="obrobotka2.php?del=<?= $row['id']?>">изменить</button><br>
				       	 	<button style="background-color: red;color:white;
				       	border-radius: 100px;width: 70px;margin-top: 10px;" formaction="obrobotka.php?delete=<?= $row['name']?>"
				       	>удалить</button>
				       </form>
				       </td>
				    </tr>
				</table>


				<?php

			}
			while ($row=mysqli_fetch_array($result));
		}
	?>


	</body>
</html>