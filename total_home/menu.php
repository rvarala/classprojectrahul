<div id="menu">
        <ul>
            <li><a href="/classproject/total_home/home.php">HOME</a></li>
            <?php if(!isset($_SESSION["email"])):?>
                <li><a href="/classproject/total_login/loginform.php">LOGIN</a></li>
            <?php else :?>
                <li><a href="/classproject/total_login/logout.php">LOGOUT</a></li>
            <?php endif;?>
            <li><a href="/classproject/total_student/studentform.php">STUDENT</a></li>
            <li><a href="/classproject/total_course_info/course_Info.php">COURSE INFO</a></li>
            <li><a href="/classproject/total_course_info/encrolled.php">Enrolled Courses</a></li> 
            <li><a href="/classproject/total_personal_info/personal_info.php">PERSONAL INFO</a></li>
        </ul>
        </div>