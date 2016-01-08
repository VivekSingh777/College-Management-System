<?php
include_once("php_includes/check_login_status.php");
// Initialize any variables that the page might echo
$u = "";
$sex = "Male";
$userlevel = "";
$country = "";
$joindate = "";
$lastsession = "";
// Make sure the _GET username is set, and sanitize it
if(isset($_GET["t"])){
	$t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']);
	//echo "success"; 

	if($t == "admin"){

	header("location: admin.php");
   
   }

   if($t == "faculty"){

	header("location: faculty.php");
   
   }

   if($t == "staff"){

	header("location: staff.php");
   
   }

   if($t == "student"){

	header("location: student.php");
   
   }


} else {
    header("location: home.php");
    exit();	
}
// Select the member from the users table
