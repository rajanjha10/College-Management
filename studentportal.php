<?php
session_start();
?>
<?php 
    
     $check=$_SESSION["user"];
    if($check=='') 
    { 
        
header("Location: studentlogin.html"); 
         
        die("Redirecting to studentlogin.html"); 
    } 
?>
<html >
<head>
<title>Student Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body >
<font  size="4"  align="right">
<div >Welcome <a href="logouts.php"><font  size="4" color="violet" align="right">&nbsp;LoggOut</font></a></div></font>
<div class="main">
 <div class="logo">
        <h1><a href="main.php">Student&nbsp;<span>Portal</span></a></h1>
      </div>
  <div class="header">
   <div class="header_resize">
	       <div class="menu_nav">
        <ul style="padding:30px 50px 25px 50px;">
          <li><a href="main.php"><span>Home</span></a></li>
		  <li><a href="studentprofile.html"><span>View/Edit Profile</span></a></li>
		<li><a href="tgedit.html"><span>View/Edit T/G Form</span></a></li>	
<li><a href="requestandsuggestion.html"><span>Request/Suggestation</span></a></li>
		  		
		</ul>
      </div> </div>
        <div class="header">
      <div class="header_resize">
      <div class="menu_nav">
        <ul style="padding-right: 60px; padding-top: 50px;">
                  <li><a href="tgfill.html"><span>Fill TG Form</span></a></li>
          <li><a href="attendances1.html"><span>View Attendance</span></a></li>
          <li><a href="feedbackstd.html"><span>Feedback Form</span></a></li>
          <li><a href="utsv1.html"><span>View UT Marks</span></a></li>

		  </div>
   </div>
        </body>
</html>
  











































  
  




