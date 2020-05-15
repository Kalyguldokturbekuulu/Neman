<?php include_once"db_connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="sms">
    <?php
     $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
         $code = filter_var(trim($_POST['code']),
        FILTER_SANITIZE_STRING);
          $FIO = filter_var(trim($_POST['FIO']),
        FILTER_SANITIZE_STRING);
           $password = filter_var(trim($_POST['password']),
        FILTER_SANITIZE_STRING);
            $email = filter_var(trim($_POST['email']),
        FILTER_SANITIZE_STRING);

        if(mb_strlen($login)<5 || mb_strlen($login)>30){
        	echo "Недопустимая длина логина";?>
        <form action="registration.php"method="post">
            <button class="btn" type="submit" style="margin-top: 70px;">Назад к регистрацию</button>
        </form>
        <?php
        	exit();
        } elseif($code!=123456789){
        	echo "вы не можете зарегистрироватся на этом сайте,</br>причина, вы не являетесь сотрудником </br>данного компания";?>
        <form action="registration.php"method="post">
            <button class="btn" type="submit" style="margin-top: 70px;">Назад к регистрацию</button>
        </form>
        <?php
        	exit();
        }
        elseif(mb_strlen($FIO)<3||mb_strlen($FIO)>30){
        	echo "Недопустимая длина Ф.И.О";?>
        <form action="registration.php"method="post">
            <button class="btn" type="submit" style="margin-top: 70px;">Назад к регистрацию</button>
        </form>
        <?php
        	exit();
        }elseif(mb_strlen($password)<4||mb_strlen($password)>12){
        	echo "Недопустимая длина пароля</br> пароль должен состоять</br> от 4 до 12 символов ";?>
        <form action="registration.php"method="post">
            <button class="btn" type="submit" style="margin-top: 70px;">Назад к регистрацию</button>
        </form>
        <?php
        	exit();
        }elseif(mb_strlen($email)<5){
        	echo"Недопустимая длина эл.почты";?>
        <form action="registration.php"method="post">
            <button class="btn" type="submit" style="margin-top: 70px;">Назад к регистрацию</button>
        </form>
        <?php
        exit();
        }else{
            echo"Вы успешно зарегистрировались";?>
        <form action="index.php"method="post">
            <button class="btn" type="submit" style="margin-top: 70px;">Войти в систему</button>
        </form>
        <?php
    }

     $mysql = $link;
        $mysql -> query("INSERT INTO `authorization` (`login`,`code`,`FIO`,`password`,`email`)
        	VALUES ('$login','$code','$FIO','$password','$email')");
        $mysql->close();
    ?>

    </div>
</body>
</html>