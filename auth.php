<?php
session_start();
require_once	'connect.php';
	
$login=$_POST['login'];
$password=$_POST['password'];

$check_user=mysqli_query($connect,"SELECT	*	FROM	`user`	WHERE	`login`='$login'	AND	`password`='$password'");

if(mysqli_num_rows($check_user)>0){
$user=mysqli_fetch_assoc($check_user);
$_SESSION['user']=[
	"id"	=>	$user['id'],
	"full_name"	=>	$user['full_name'],
	"ava"	=>	$user['ava'],
	"email"	=>	$user['email'],
	"phone"	=>	$user['phone'],
	"admin"	=>	$user['admin'],
	"ban"	=>	$user['ban']];
	if($_SESSION['user']['ban']>0){
		$_SESSION['Message']=' Вы были забанены';
	header('Location:	/check_in2/index.php');}
	if($_SESSION['user']['admin']>0){
		header('Location:	/check_in2/admin.php');
	}
else
{	header('Location:	lk.php');
}
}
else{
$_SESSION['Message']='Неверный	логин	или	пароль';
header('Location:	index.php');}
	?>
