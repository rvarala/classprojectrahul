<?php
include("../classproject/connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
  
		<title>AUM</title>
        
       <!-- <link rel="stylesheet" href="/classproject/total_home/main.css">-->
        
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">
 		 
	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<div style="height: 105px;background: coral;width: 100%;">
				<div class="navbar-header" style="background-color: blue; ">
					<a href="index.php" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo" style="
    float: left;"></a>
				</div>
				<div align="right" ><div align="center">
					 <h3 align="center" style="padding: 3px; color:black"><strong style="color:#EBFA61;font-size: 40px;"> Auburn University</strong> at Montgomery</h3>
                </div>
        </div>
</div>
        
<div class="topnav" id="myTopnav">
  <a href="index.php">HOME</a>
  <a href="description.html">DESCRIPTION</a>
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

<div class="w3-content w3-display-container" style="max-width: 100%">
  <img class="mySlides" src="images/slider.jpg" style="width:100%">
  <img class="mySlides" src="images/slider1.jpg" style="width:100%">
  <img class="mySlides" src="images/slider2.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<!----------SIDEBAR--------->
 <div class="container">      
<div class="sidebar">
    <h3><strong>RELATED LINKS</strong></h3>
            <a href="index.php" class="i_btn">What can I Study?</a>
            <a href="index.php" class="i_btn">What stepd do i have to take?</a>
            <a href="index.php" class="i_btn">Where can a degree take me</a>
            <a href="index.php" class="i_btn">Can I afford the cost</a>
            <a href="index.php" class="i_btn">Can I do the work</a>

       </div>
     <div class="rightside"> <img src="images/home1.png" style="width:60%"> 
         <h2><strong>Opportunity calls at AUM!</strong></h2>
<p>Now more than ever education matters.  Education that can take you places, provide higher opportunities and build knowledge and skills that matter.  At AUM, we value your educational experience and your future opportunities.  Your education opportunities are more open than ever.  Check out the latest that AUM is offering to new students during this difficult time. 

 
<ul>
  <li>Free Laptop for first-time, full-time freshman.</li>
  <li>No Application Fees.</li>
  <li>Additional Pell Grant funding may be available this summer for those who qualify.</li>
  <li>ACT/SAT Waivers for Summer and Fall 2020.</li>
  <li>GMAT/GRE/MAT Waivers for Summer and Fall 2020.</li>
  <li>ACT/SAT Superscoring for those with scores.  Check it out here.</li>
  <li>Summer Incentive Scholarships offering $100 per credit hour taken for all first time AUM students.</li>
  <li>Financial Aid to those who qualify.</li>

</ul>
    With more than 90 undergraduate and graduate-level degree programs and certificates, Auburn University at Montgomery offers award-winning education opportunities to its students. Unlock your potential and achieve your personal and professional goals via online opportunities today.</p> 
     </div>
        
     </div>
</div>
<div id="home">
    <?php //include '../classproject/total_home/home.php' ;     ?>
   <?php include '../classproject/total_home/header.php' ;     ?>
   <?php // include '../classproject/total_home/menu.php' ;      ?>
     <div id="content"></div>
    <div id="footer"></div>
            </div>
		<!-- start footer -->
		<footer>
			<div>
					<div>
						<h3>Copyright &copy; 2020</h3>
						<small>Designed by SR</small>
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
		<!-- end footer -->


		<!-- jQuery -->
		<script src="js/jquery.js"></script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
	</body>
</html>
