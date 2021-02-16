<?php
session_start();
if($_SESSION['user']){
    (header('Location:  /check_in2/lk.php'));
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
</head>
<body>

    <div class="container">
    <div class="container__login">
    <h1>Вход</h1>
    <form action="auth.php"  method="POST">
        <p>Логин пользователя</p>
        <input class="input"  name="login"    type="text" placeholder="Введите логин">
        <p>Пароль</p>
        <input class="input"  name="password" type="password" placeholder="Введите пароль"><br>
        <button type="submit">Вход</button><br>
        <a href="regist.php">Регистрация</a>
        
        
        <?php
        if($_SESSION['Message']){
            echo    ' <p  class="msg">'   .  $_SESSION['Message']    .'</p> ';
        }
        unset($_SESSION['Message']);
        ?>
        
    </form>
    </div>

    </div>

</body>
</html>