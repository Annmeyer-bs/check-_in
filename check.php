<?php
$full_name=filter_var(trim($_POST['full_name']),
FILTER_SANITIZE_STRING);
$email=filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$login=filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5||mb_strlen($login)>70){
	echo	"Недопустимая	длина	логина";
	exit();
}
elseif
(mb_strlen($password)<6||mb_strlen($password)>8){
	echo	"Недопустимая	длина	пароля(6-8символов)";
	exit();
}
	
	$mysqli = new mysqli('localhost', 'root', 'root', 'bd');
	$mysqli->query("INSERT INTO `user`( `full_name`,`email`,`login`, `password`) VALUES('$full_name','$email','$login','$password')");
	$mysqli->close();

	header('Location:	/check_in/index.php');
	?>
