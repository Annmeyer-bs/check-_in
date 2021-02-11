
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
   
    <div class="container">
    <div class="container__regist">
    <h1>Регистрация</h1>
    <form action="check.php"  method="POST">
        <p>ФИО</p>
        <input class="input"  name="full_name"    type="text" placeholder="Введите ФИО" >
        <p>E-mail</p>
        <input class="input"  name="email"    type="email"   placeholder="Введите email">
        <p>Логин</p>
        <input class="input"  name="login"    type="text" placeholder="Введите логин">
        <p>Пароль</p>
        <input class="input"  name="password" type="password" placeholder="Введите пароль"><br>
        <button type="submit">Зарегистрироваться</button><br>
        <p>Зарегистрированы? 
            <a href="index.php">Ввойти</a>
        </p>
    </form>
    </div>
    </div>

</body>
</html>
