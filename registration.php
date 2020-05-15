<?php include"db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="text-align: center;
               margin-top: 50px;">регистрация</h1>
    <div id="reg">
       <form action="query-registration.php" method="post">
             <label class="label">логин:</label>
            <input type="text" name="login"class="input" placeholder="Придумайте себе логин!">
            <label class="label">код для сотрудников:</label>
            <input type="password"name="code" class="input"placeholder="Вводите код сотрудника!"><br>
            <label class="label">Ф.И.О</label>
            <input type="text"name="FIO" class="input"placeholder="Вводите своё ФИО!"><br>
            <label class="label">пароль:</label>
            <input type="password"name="password" class="input"placeholder="Вводите ваш пароль!"><br>
            <label class="label">эл.почта:</label>
            <input type="text"name="email" class="input"placeholder="Вводите ваш email!"><br>
            <input type="submit" text="submit" value="отправить" class="submit">

        </form>
    </div>
</body>
</html>