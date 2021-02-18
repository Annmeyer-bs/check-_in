<?php
session_start();
require_once	'connect.php';
if($_SESSION['user']['admin']=0){
    (header('Location:  lk.php'));
}
?>
<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
  <title>Админ-панель</title>
<body>
  <?php

    if (isset($_POST["admin"])) {
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($connect, "UPDATE `user` SET `admin` = '{$_POST['admin']}',`ban` = '{$_POST['ban']}' WHERE `id`={$_GET['red_id']}");
      } else {
          $sql = mysqli_query($connect, "INSERT INTO `user` (`admin`, `ban`) VALUES ('{$_POST['admin']}', '{$_POST['ban']}')");
      }

      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
      }
    }

    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($connect, "SELECT `id`, `admin`, `ban` FROM `user` WHERE `id`={$_GET['red_id']}");
      $us = mysqli_fetch_array($sql);
 echo '
<h3>Измениние  данных</h3>
  <form action="" class="edit" method="post">
        <p>admin:</p>
        <input type="text" name="admin" value="'.$us['admin'].'">
        <p>ban:</p>
        <input type="text" name="ban" value="'.$us['ban'].'">
    
       <button>OK</button>';
      }
  ?>
  </form>
  <h2>Пользователи</h2>
  <table>
    <tr>
      <td>Номер</td>
      <td>ФИО</td>
      <td>Почта</td>
      <td>Админ</td>
      <td>Бан</td>
      <td>Редактирование</td>
    </tr>
    <?php
      $sql = mysqli_query($connect, 'SELECT `id`, `full_name`,  `email`, `admin`, `ban` FROM `user`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['id']}</td>" .
             "<td>{$result['full_name']}</td>" .
             "<td>{$result['email']}</td>" .
             "<td>{$result['admin']}</td>" .
             "<td>{$result['ban']} </td>" .
             "<td><a href='?red_id={$result['id']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
  </table>
  <p><a href="exit.php">Выйти</a></p>
  </head>
</body>
</html>
