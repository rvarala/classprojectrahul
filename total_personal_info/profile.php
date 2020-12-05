<?php
include("../connection.php");
session_start();
error_reporting(0);
?>
 
<?php
print_r($_POST);
if($_POST['submit']){
    $sl =$_POST['slno'];
    $n = $_POST['name'];
    $b = $_POST['birthday'];
    $g = $_POST['gender'];
    $mail =$_POST['email'];
    
    if($n && $b && $g && $mail ){
        
        echo $query = "UPDATE `register` SET `name`='".$_POST['name']."', `birthday`='".$_POST['birthday']."',`gender`='".$_POST['gender']."',`email`='".$_POST['email']."'  WHERE `slno` = '".$sl."'";
        $data = mysqli_query($conn,$query);
    }
    if($data){
       $_SESSION['msg'] = 'Updated your profile.';
       header("Location: http://localhost/classproject/total_personal_info/personal_info.php");
    }                                     

}
?> 
             