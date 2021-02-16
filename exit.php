<?php
session_start();
unset($_SESSION['user']);
    (header('Location:  /check_in2/index.php'));

?>