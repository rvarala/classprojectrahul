<?php
include("../connection.php");
error_reporting(0);
?>
<html>
<head>
    <title>Course Info</title>
    <link rel="stylesheet" href="/classproject/total_home/main.css">
</head>
    <body>
        <div id="home">
           <?php include '../total_home/header.php' ;     ?>
           <?php include '../total_home/menu.php' ;      ?>
            <form action ="/classproject/total_course_info/search.php " method="POST" style=" border: 1px solid black; padding: 25px 50px 50px 25px; margin: 25px 100px 150px 25px; background-color: lightblue;"> 
                <label>Search</label>
                <input type="text" name="search" value="" style="padding: 10px 0px 0px 10px ;"/>
                <select name="key" >
                    <option value="name">Search By name</option>
                    <option value="instructor">Search By instructor </option>
                    <option value="courseid">Search By courseid </option>
                </select><br><br>
                <input type="submit" name="submit" value="Search" >
            </form>
                
           
           </div>
           <div id="footer"></div>
        
    </body>
</html>




