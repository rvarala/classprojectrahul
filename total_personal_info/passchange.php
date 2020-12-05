<?php
include("../connection.php");
session_start();
error_reporting(0);
?>
<?php
//print_r($_POST);

if($_POST['submit']){
$slno =$_POST['slno'];
$currentpassword = $_POST['password'];
$newpass = $_POST['newpass'];
$newcnpass = $_POST['newcnpass'];
    $sql="SELECT * FROM register WHERE slno=$slno and password='".md5($currentpassword)."'"; 
    $result = mysqli_query($conn,$sql);
     
    if(mysqli_num_rows($result) == 0){
         $_SESSION['msg'] =  "You are given worng current password";
header("Location: http://localhost/classproject/total_personal_info/personal_info.php");
    }
    //echo $newpass .'=='. $newcnpass;
    if($newpass === $newcnpass){
       
       $sql2 ="UPDATE register SET password='".md5($newpass)."' where slno=$slno";
       $result2 = mysqli_query($conn, $sql2);
       
       if($result2){
             $_SESSION['msg'] = 'Your password Uppdate sucsessfully';
            header("Location: http://localhost/classproject/total_personal_info/personal_info.php");
       }
    }
    else {
         $_SESSION['msg'] = 'password not match';
         header("Location: http://localhost/classproject/total_personal_info/personal_info.php");
    }
    
}
?>