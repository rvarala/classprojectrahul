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
          //  print_r($_POST);
    if($_POST['submit']){
        $c = $_POST['courseid'];
        if($c){
            $query = "UPDATE `enrollment` SET `status`='withdraw' WHERE `courseid` = '".$c."'";
            $data = mysqli_query($conn,$query);
        }
        if($data){
            echo "Status update";
        }                                     
        
    }
        ?>
             </div>
         <div id="footer"></div>
    </div>
    </body>
</html>