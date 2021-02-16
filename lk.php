<?php
session_start();
require_once	'connect.php';
if(!$_SESSION['user']){
    (header('Location:  /check_in2/index.php'));
}
if($_SESSION['user']['ban']>0){
  echo  'Для  уточнения информации  свяжитесь с нами';}
  else{
    $sql = mysqli_query($connect, "SELECT `id`, `full_name`, `email`, `phone`, `ava` FROM `user`  WHERE `id`={$_SESSION['user']['id']}");
    $up = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
<title></title>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="container__lk">
    <h1>Личный  кабинет</h1>
    <form action="lkup.php"  method="POST"	enctype="multipart/form-data">
    
    <img src="<?=$up['ava']?>" width="100" alt="">
    <p><?= $up['full_name']?></p>
    <p><?= $up['email']?></p>
    <p><?= $up['phone']?></p>
    <h3>Редактировать данные</h3></h3>
    <p>Фото</p>
    <input class="input"  name="ava" type="file" placeholder="Выберите	файл"><br>
   
       <p>ФИО  </p>
      <input class="input"  name="full_name"    type="text" placeholder="Введите ФИО" >

      <p>E-mail     </p>
       <input class="input"  name="email"    type="email"   placeholder="Введите email">

       <p>Номер	телефона</p>
    <input class="input"  name="phone"    type="text" placeholder="Введите логин">

      <button>Сохранить	изменения</button><br>
      
      <?php
  } 
        if($_SESSION['Message']){
            echo    ' <p  class="msg">'   .  $_SESSION['Message']    .'</p> ';
        }
        unset($_SESSION['Message']);
        ?> 
      <a href="exit.php">Выйти</a>
    </form>
    </div>
    </div>
</body>
</html>