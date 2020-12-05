<?php
include("../connection.php");
error_reporting(0);
?>
<html>
    <head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="/classproject/total_home/main.css">
</head>
<body>
    <div id="home">
                   <?php include '../total_home/header.php' ;     ?>
                   <?php include '../total_home/menu.php' ;      ?>
         <div id="content">

<?php
            // print_r($_POST);
    if($_POST['submit']){
        $mail = $_POST['email'];
        $c = $_POST['courseid'];
        
        if($mail && $c ){
            $query = "INSERT INTO `enrollment` (`email`, `courseid`,`status`) VALUES ('$mail', '$c','enrollmented')";
            $data = mysqli_query($conn,$query);
        }
        if($data){
            echo "data insert into enrollment ";
        }                                     
        
    }
        ?>
             </div>
         <div id="footer"></div>
    </div>
    </body>
</html>