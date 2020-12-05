 <?php
include("../connection.php");
error_reporting(0);
?>
<html>
    <head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="/NewFolder/total_home/main.css">
</head>
<body>
    <div id="home">
                   <?php include '../total_home/header.php' ;     ?>
                   <?php include '../total_home/menu.php' ;      ?>
         <div id="content">

<?php
    if($_POST['submit']){
        $n = $_POST['name'];
        $b = $_POST['birthday'];
        $g = $_POST['gender'];
        $id = $_POST['id'];
        $mail = $_POST['email'];
        $pwd = md5($_POST['pass']);
        $conpwd = md5($_POST['cnfpass']);
        
        if($pwd != $conpwd){
            echo 'password is not match';
        }
        else if($n && $g && $id && $mail && $pwd && $conpwd){
            $query = "INSERT INTO `register` (`name`,`birthday`, `gender`, `id`, `email`, `password`, `confirmpassword`) VALUES ('$n','$b', '$g', '$id', '$mail', '$pwd', '$conpwd')";
            $data = mysqli_query($conn,$query);
        }
        if($data){
            echo "data insert into register ";
        }                                                                            
        else{
            echo "all fields are required";
        }
    }
    ?>
              </div>
         <div id="footer"></div>
    </div>
    </body>
</html>