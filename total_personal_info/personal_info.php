<?php
include("../connection.php");
error_reporting(0);
?>
<html>
    <head>
    <title>Personal Info</title>
    <link rel="stylesheet" href="/classproject/total_home/main.css">
</head>
        <body>
         <div id="home">
                   <?php include '../total_home/header.php' ;     ?>
                   <?php include '../total_home/menu.php' ;      ?>
             <?php
             
             $email = $_SESSION["email"];
             $sql ="SELECT * FROM register WHERE email='".$email."'";
             $data=mysqli_query($conn,$sql);
             if(mysqli_num_rows($data) > 0){
             ?>  
             <style>
                 form{
                     border: 1px solid black; 
                     padding: 25px 70px 50px 25px;
                     margin: 25px 100px 150px 25px; 
                     background-color: lightblue;
                 }
                 .a{  padding-right: 50px; }
                 .b{  padding-right: 32px; }
                 .c{  padding-right: 36px; }
                 .d{  padding-right: 45px; }
                 .e{  padding-right: 45px; }
                 .f{  padding-right: 64px; }
                 .g{  padding-right: 6px; }
             </style>
          <h3>PROFILE</h3>
             <h4>Basic Information</h4>
                <?php echo $_SESSION['msg']; unset( $_SESSION['msg']);?>
                <?php while($row = mysqli_fetch_assoc($data)){?>
            
    
                <form action="/classproject/total_personal_info/profile.php" method="post">
                    <input type="hidden" name="slno" value="<?php echo $row['slno'];?>"/><br><br>
                <label class="a">Name</label> <input type="text" name="name" value="<?php echo $row['name'];?>"/><br><br>
                <label class="b">Birthday</label> <input type="text" name="birthday" value="<?php echo $row['birthday'];?>"/><br><br>
                    
                <label class="c"> Gender</label> <input type="radio" <?php if($row['gender'] == 'male'){ echo  'checked="checked"';}?> name="gender" id="male" value="male"/> <label for="male">Male</label><input type="radio" <?php if($row['gender'] == 'female'){ echo  'checked="checked"';}?> name="gender" id="female" value="female"/> <label for="female">Female</label><br><br>
                    
                    <label class="d"> E-mail</label> <input type="text" name="email" value="<?php echo $row['email'];?>"/><br><br> 
                   <input type="submit" name="submit" value="Update"/>
               </form>
             
             <h4>For changing the password </h4>
             <form action="/classproject/total_personal_info/passchange.php" method="post">
                 <input type="hidden" name="slno" value="<?php echo $row['slno'];?>"/>
                 <label class="e">Current Password</label> <input type="password" name="password" value=""/><br><br>
                    <label class="f">New Password</label> <input type="password" name="newpass" value=""/><br><br>
                    <label class="g">Confirm New Password</label> <input type="password" name="newcnpass" value=""/><br><br>
                   <input type="submit" name="submit" value="Update"/>
             </form>
             <?php }} ?>
             
             <div id="content"></div>
             <div id="footer"></div>

        </div>
         </body>
</html>