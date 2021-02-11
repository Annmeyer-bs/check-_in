<?php
	setcookie('user',$user['full_name'],	time()	-3600,	"/");
	header('Location:	/PHP/index.php');
	?>