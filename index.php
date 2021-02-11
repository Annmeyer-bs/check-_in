
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        
    <?php
    if($_COOKIE['user']==''):
       ?>
    <div class="container__login">
    <h1>Вход</h1>
    <form action="auth.php"  method="POST">
        <p>Логин пользователя</p>
        <input class="input"  name="login"    type="text" placeholder="Введите логин">
        <p>Пароль</p>
        <input class="input"  name="password" type="password" placeholder="Введите пароль"><br>
        <button type="submit">Вход</button><br>
        <a href="regist.php">Регистрация</a>
    </form>
    </div>
    <?php   
    else:?>
    <P>Привет,   <?=$_COOKIE['user']?>. Чтобы  выйти   нажмите   <a href="exit.php">здесь.</a> </P>
    <?php   endif;?>
    </div>

</body>
</html>