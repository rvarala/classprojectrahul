<?php
session_start();
session_unset();
session_destroy(); 
header("Location: http://localhost/classproject/total_login/loginform.php");
?>