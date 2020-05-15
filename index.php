<?php include"db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Neman-storage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="text-align: center;
               margin-top: 50px;">
    Автоматизация системы учета лекарственных средств склада аптеки Неман</h1>
    <h2 style="text-align: center;
               color:#0069C9;">добро пожаловать!</h2>
    <div id="avto">
        <form action="authorization.php" method="post">
             <label class="label">логин:</label>
            <input type="text" name="login"class="input" placeholder="Вводите ваш логин!">
            <label class="label">пароль:</label>
            <input type="password"name="password" class="input"placeholder="Вводите ваш пароль!"><br>
            <input type="submit" text="submit" value="войти" class="submit">
            <button formaction="registration.php" class="btn">регистрация</button>
        </form>
    </div>
    <div>
        <?php
            $exit = $_GET['ex'];
            if($exit==1){
                ?>
                    <script>
                        alert("Вы вышли с аккаунта!");
                    </script>
                <?php
            }
         ?>
    </div>
</body>
</html>