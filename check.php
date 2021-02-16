<?php
session_start();
require_once	'connect.php';
	
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$login=$_POST['login'];
$password=$_POST['password'];

mysqli_query($connect,"INSERT INTO `user`( `full_name`,`email`,`login`, `password`) VALUES('$full_name','$email','$login','$password')");

<<<<<<< HEAD
$_SESSION['Message']='Регистрация	прошла	успешна';
header('Location:	/check_in2/index.php');
	?>
=======
	header('Location:	/check_in/index.php');
	?>
>>>>>>> 1854e9c1eb0cdc12a7fc7399489fb57ed16b5f0f
