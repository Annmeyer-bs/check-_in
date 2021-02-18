<?php
session_start();
require_once	'connect.php';
	
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$login=$_POST['login'];
$password=$_POST['password'];

mysqli_query($connect,"INSERT INTO `user`( `full_name`,`email`,`login`, `password`) VALUES('$full_name','$email','$login','$password')");

$_SESSION['Message']='Регистрация	прошла	успешна';
header('Location:	index.php');
?>
