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
             $query = " SELECT * FROM `enrollment` where status = 'enrollmented' ";
            $data = mysqli_query($conn,$query);
            
            ?>
 <style>
             table {
    border: 1px solid #001963;
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
}
td, th {
    border: 1px dashed #001963;
    padding: .2em .5em .2em .5em;
    text-align: left;
}
                 tr{
                     background-color: azure;
                 } 
                 #row1{
                     background-color: aquamarine;
                 }
     h1{ text-align: center;}
             
  </style>
           <div id="content"> 
               
               <table >
                   <h1>Show All Available Courses</h1>
                  <tr id="row1">
                    <th>Course ID</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                 <?php if (mysqli_num_rows($data) > 0) :?>
                 <?php while($row = mysqli_fetch_assoc($data)) :?>
                  <tr>
                    <td><?php echo  $row['courseid'];?></td>
                    <td><?php echo  $row['email'];?></td>
                    <td><?php echo  $row['status'];?></td>
                    <td>
                      <form action ="/classproject/total_course_info/withdraw.php" method="POST">
                          <input type="hidden" name="courseid" value="<?php echo $row['courseid']; ?>"/>
                          <input type="submit" name="submit" value="Withdraw"/>   
                     </form>
                    </td>
                  </tr>
                 <?php endwhile;?>
                 <?php else :?>
                    <?php echo "No result found";?>
                  <?php endif;?>
                </table>

 </div>
         <div id="footer"></div>
    </div>
    </div>
    </body>
</html>



