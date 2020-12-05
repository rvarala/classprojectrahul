<?php
 session_start();
 if( $_SERVER['REQUEST_URI'] == '/classproject/total_student/studentform.php'){
     
 }
 else if(!$_SESSION["email"] &&  $_SERVER['REQUEST_URI'] != '/classproject/total_login/loginform.php'){
     header("Location: http://localhost/classproject/total_login/loginform.php");
 }


?>


