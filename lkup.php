<?php
session_start();
require_once	'connect.php';
	
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$avat='ava/'	.	time()	.	$_FILES['ava']['name'];
if(move_uploaded_file($_FILES['ava']['tmp_name'],	$avat)){
	$_SESSION['Message']='Загрузка	фото	неудалась';
	header('Location:	lk.php');	
}

	$id=$_SESSION['user']['id'];
$res=mysqli_query($connect,"UPDATE `user` SET	`full_name`='$full_name',`email`='$email',`phone`='$phone', `ava`='$avat'	WHERE	`id`='$id'");

$_SESSION['Message']='Изменения	прошли	успешно';
header('Location:	lk.php');

?>
