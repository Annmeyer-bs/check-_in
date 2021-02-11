<?php
	setcookie('user',$user['full_name'],	time()	-3600,	"/");
	header('Location:	/check_in/index.php');
	?>
