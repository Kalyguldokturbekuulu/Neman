<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>результаты поиска</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="nazad">
		<form action="login.php" method="post">
			<input class="btn5"type="submit" value="Назад">
		</form>
	</div>
	<?php
		$serch = $_POST['serch'];

		$query = "SELECT * FROM product WHERE (id='$serch')";
		$q = mysqli_query($link,$query);

		if(mysqli_num_rows($q)>0){
			$row = mysqli_fetch_array($q);

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
			while ($row=mysqli_fetch_array($q));
			exit();
		}
			$query = "SELECT * FROM product WHERE (name='$serch')";
		$q = mysqli_query($link,$query);

		if(mysqli_num_rows($q)>0){
			$row = mysqli_fetch_array($q);

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
				       	border-radius: 100px;width: 70px;margin-top: 10px;" formaction="obrobotka.php?del=<?= $row['id']?>"
				       	>удалить</button>
				       </form>
				       </td>
				    </tr>
				</table>


				<?php

			}
			while ($row=mysqli_fetch_array($q));
			exit();
		}
	?>
	<h2 style="text-align:center;">упс! ничего не найдено...</h2>
</body>
</html>