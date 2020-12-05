 <?php
include("../classproject/connection.php");
error_reporting(0);

    if($_GET['submit']){
        $n = $_GET['name'];
        $g = $_GET['gender'];
        $id = $_GET['id'];
        $mail = $_GET['email'];
        $pwd = md5($_GET['pass']);
        $conpwd = md5($_GET['cnfpass']);
        
        if($pwd != $conpwd){
            echo 'password is not match';
        }
        else if($n && $g && $id && $mail && $pwd && $conpwd){
            $query = "INSERT INTO `register` (`name`, `gender`, `id`, `email`, `password`, `confirmpassword`) VALUES ('$n', '$g', '$id', '$mail', '$pwd', '$conpwd')";
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