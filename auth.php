<?php

$login=filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

	
	$mysqli = new mysqli('localhost', 'root', 'root', 'bd');
	$result=$mysqli->query("SELECT *	FROM	`user`	WHERE	`login`='$login'	AND	`password`='$password'");
	$user=$result->fetch_assoc();
	if(count($user)==0)	{
		echo	"Такой	пользователь	не	найден";
	exit();
	}
	
	setcookie('user',$user['full_name'],	time()	+3600,	"/");
	$mysqli->close();

	header('Location:	/PHP/index.php');
	?>