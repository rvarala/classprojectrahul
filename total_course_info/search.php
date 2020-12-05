<?php
include("../connection.php");
error_reporting(0);
?>
<html>
    <head>
    <title></title>
    <link rel="stylesheet" href="/classproject/total_home/main.css">
</head>
<body>
    <div id="home">
                   <?php include '../total_home/header.php' ;     ?>
                   <?php include '../total_home/menu.php' ;      ?>
         <div id="content">
             
 <?php
            if(isset($_POST['submit'])){
                
                 if($_POST['search'] && $_POST['key']){
                     $query = "SELECT * FROM courseinfo WHERE ".$_POST['key']." = '".$_POST['search']."' "; 
                 }
                else {
                     $query = " SELECT * FROM `courseinfo` ";
                }
            } 
           
            $data = mysqli_query($conn,$query);
            
            ?>
           <div id="content"> 
               <table>
                   <h1>Show All Available Courses</h1>
                  <tr>
                    <th>Course ID</th>
                    <th>Name</th>
                    <th>Semester</th>
                      <th>Instructor</th>
                      <th>Classroom</th>
                      <th>Time</th>
                      <th>Enroll</th>
                  </tr>
                 <?php if (mysqli_num_rows($data) > 0) :?>
                 <?php while($row = mysqli_fetch_assoc($data)) :?>
                  <tr>
                    <td><?php echo  $row['courseid'];?></td>
                    <td><?php echo  $row['name'];?></td>
                    <td><?php echo  $row['semester'];?></td>
                    <td><?php echo  $row['instructor'];?></td>
                    <td><?php echo  $row['classroom'];?></td>
                    <td><?php echo  $row['time'];?></td>  
                    <td>
                      <form action ="/classproject/total_course_info/enroll.php" method="POST">
                          <input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>"/>
                          <input type="hidden" name="courseid" value="<?php echo  $row['courseid'];?>"/>
                          <input type="hidden" name="status" value="<?php echo $_SESSION["status"]; ?>"/>
                          <input type="submit" name="submit" value="enroll"/>   
                     </form>
                    </td>
                  </tr>
                 <?php endwhile;?>
                 <?php else :?>
                    <?php echo "No result found";?>
                  <?php endif;?>
                </table>
<?php

    if($_POST['submit']){
        $c = $_POST['courseid'];
         $n = $_POST['name'];
        $i = $_POST['instructor'];
        if($c && $n && $i ){
            $query = " SELECT * FROM `courseinfo` WHERE `courseid`='$c'  && `name`='$n'  && `instructor`='$i' ";
            $data = mysqli_query($conn,$query);
        }
        if($data){
            echo "select success ";
        }                                     
        
    }
        ?>
 </div>
         <div id="footer"></div>
    </div>
    </div>
    </body>
</html>



