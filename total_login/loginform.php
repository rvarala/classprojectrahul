<?php

include("../connection.php");
error_reporting(0);
?>
<html>
    <head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="/classproject/total_home/main.css">

		<!-- font-awesome -->
		<link rel="stylesheet" href="/classproject/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!-- custom -->
		<link rel="stylesheet" href="/classproject/css/style.css">
 		 
	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<div style="height: 105px;background: coral;width: 100%;">
				<div class="navbar-header" style="background-color: blue; ">
					<a href="index.php" class="navbar-brand"><img src="/classproject/images/logo.png" class="img-responsive" alt="logo" style="
    float: left;"></a>
				</div>
				<div align="right" ><div align="center">
					 <h3 align="center" style="padding: 3px; color:black"><strong style="color:#EBFA61;font-size: 40px;"> Auburn University</strong> at Montgomery</h3>
                </div>
        </div>
</div>

<div class="topnav" id="myTopnav">
    <a href="/classproject/index.php">HOME</a>
    <a href="/classproject/description.html">DESCRIPTION</a>
    <a href="/classproject/total_home/home.php">STUDENT</a>
    <?php if(!isset($_SESSION["email"])):?>
        <a href="/classproject/total_login/loginform.php">LOGIN</a>
    <?php else :?>
        <a href="/classproject/total_login/logout.php">LOGOUT</a>
    <?php endif;?>
    <a href="/classproject/total_student/studentform.php">STUDENT FORM</a>
    <a href="/classproject/total_course_info/course_Info.php">COURSE INFO</a>
    <a href="/classproject/total_course_info/encrolled.php">ENROLLED COURSES</a>
    <a href="/classproject/total_personal_info/personal_info.php">PERSONAL INFO</a>
</div>
    <div id="home">
                   <?php include '../total_home/header.php' ;     ?>
    <form action ="" method="POST" style=" border: 1px solid black; padding: 25px 50px 50px 25px;
  margin: 25px 100px 150px 25px; background-color: lightblue;">
        <label style="padding-right: 5px;">ID or E-mail</label> <input type="text" name="login" value="" style="padding: 10px 0px 0px 10px;"/>
         <select name="key">
                    <option value="id">login By ID</option>
                    <option value="email">login By e-mail </option>
                </select><br><br>
       <label style="padding-right: 25px;">Password</label> <input type="password" name=" password" value="" style="padding: 10px 0px 0px 10px ;"/><br><br>
               <input type="submit" name="submit" value="login"/> 
    </form>
        <div id="content">
    <?php
    if(isset($_POST["submit"])){ 
         $id= $_POST ["id"];
        $mail= $_POST ["email"];
        $pwd= md5($_POST ["password"]); 
        if($_POST['login'] && $_POST['key']){
                     $query = "SELECT * FROM `register` WHERE ".$_POST['key']." = '".$_POST['login']."' AND `password` = '".$pwd."'";
    $result = mysqli_query($conn, $query) or die("Query Failed.");
        
        }if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION["id"]=$row["id"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["password"]=$row["password"];
        header("Location: http://localhost/classproject/total_home/home.php");
    }
}else{
   echo 'id or email and password are not matched.';
}         
    }
    
        ?>
        </div>
    </div>
    <!-- start footer -->
    <footer>
        <div>
            <div>
                <h3>Copyright &copy; 2020</h3>
                <small>Designed by Rahul Kumar Varala [+1-0123456789]</small>
            </div>
            <div>
                <a href="#" class="fa fa-facebook"></a>&nbsp; &nbsp;
                <a href="#" class="fa fa-twitter"></a>&nbsp; &nbsp;
                <a href="#" class="fa fa-instagram"></a>&nbsp; &nbsp;
                <a href="#" class="fa fa-pinterest"></a>&nbsp; &nbsp;
                <a href="#" class="fa fa-google"></a>&nbsp; &nbsp;
                <a href="#" class="fa fa-github"></a>&nbsp; &nbsp;
            </div>
        </div>
    </footer>
    </body>
</html>
