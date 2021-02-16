<?php
<<<<<<< HEAD
session_start();
unset($_SESSION['user']);
    (header('Location:  /check_in2/index.php'));

?>
=======
	setcookie('user',$user['full_name'],	time()	-3600,	"/");
	header('Location:	/check_in/index.php');
	?>
>>>>>>> 1854e9c1eb0cdc12a7fc7399489fb57ed16b5f0f
