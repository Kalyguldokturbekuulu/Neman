<?php include"db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>сотрудники</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="nazad">
		<form action="login.php" method="post">
			<input class="btn5"type="submit" value="Назад">
		</form>
	</div>
	<div id="cot">
		<label style="padding-left:10px;font-size: 20px; font-weight: 900;color:#13120E;">id</label>
		<label style="padding-left:50px;font-size: 20px; font-weight: 900;color:#13120E;">Ф.И.О</label>
		<label style="padding-left:300px;font-size: 20px; font-weight: 900;color:#13120E;">email</label>
	<?php
		$result= mysqli_query($link,"SELECT * FROM `authorization`");
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			do{?>
				<table cellspacing="0">
					<tr>
						<td style="border:1px solid blue;
						width: 50px; text-align: center;">
							<?php
							echo'

							<p>'.$row['id'].'</p>

					 	  ';?>
						</td>
						<td style="border:1px solid blue;
						width: 300px; padding-left: 10px;">
							<?php
							echo'

							<p>'.$row['FIO'].'</p>

					 	  ';?>
						</td>
						<td style="border:1px solid blue;
						width: 250px;
						padding-left: 10px;">
							<?php
							echo'

							<p>'.$row['email'].'</p>

					 	  ';?>
						</td>
					</tr>
				</table>
				<?php

			}
			while ($row = mysqli_fetch_array($result));
		}
	 ?>
</div>
</body>
</html>