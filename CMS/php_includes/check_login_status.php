<?php
//$errr = "start ";
//echo $errr . " "; 
session_start();
include_once("php_includes/db_conx.php");
// Files that inculde this file at the very top would NOT require 
// connection to database or session_start(), be careful.
// Initialize some vars
//$errr = $errr . "done ";
//echo $errr . " ";
$user_ok = false;
$log_id = "";
$log_password = "";
$log_userType= "";

// User Verify function

function evalLoggedUser($conx,$id,$p,$t){

	if($t == "admin"){

		$sql = "SELECT ip FROM admin WHERE username='$id' AND password='$p' LIMIT 1";
        $query = mysqli_query($conx, $sql);
///		$errr = $errr . $t ." ";
//echo $errr . " ";
		}
		
		if($t == "faculty"){

		$sql = "SELECT ip FROM faculty WHERE fid='$id' AND password='$p' LIMIT 1";
        $query = mysqli_query($conx, $sql);
	///	$errr = $errr . $t ." ";
//echo $errr . " ";
		}
		
		if($t == "staff"){
	
		$sql = "SELECT ip FROM staff WHERE staff_id='$id' AND password='$p' LIMIT 1";
        $query = mysqli_query($conx, $sql);
	//	$errr = $errr . $t ." ";
//echo $errr . " ";
		}
		if($t == "student"){
	
			$sql = "SELECT ip FROM student WHERE sid='$id' AND password='$p' LIMIT 1";
        $query = mysqli_query($conx, $sql);
//	$errr = $errr . $t ." ";
//echo $errr . " ";
		}	

    $numrows = mysqli_num_rows($query);
	if($numrows > 0){
		return true;
//echo $errr . "1111111";
	}

}


//$errr = $errr . "Fello ";
//echo $errr . " ";


if(isset($_SESSION["userid"]) && isset($_SESSION["password"]) && isset($_SESSION["userType"])) {
//	$errr = $errr . "5555";
//echo $errr . " ";
	$log_id = preg_replace('#[^a-z0-9]#i', '', $_SESSION['userid']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
	$log_userType = preg_replace('#[^a-z0-9]#i', '', $_SESSION['userType']);			
	// Verify the user
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_password,$log_userType);
//	$errr = $errr . "8888888";
//echo $errr . " ";
} else if(isset($_COOKIE["id"]) && isset($_COOKIE["password"]) && isset($_COOKIE["userType"])){
//$errr = $errr . "66666";
//echo $errr . " ";

	$_SESSION['userid'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['id']);
    $_SESSION['password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['password']);
    $_SESSION['userType'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['userType']);
    $_SESSION['pic_id']="";			
	$log_id = $_SESSION['userid'];
	$log_password = $_SESSION['password'];
	$log_userType = $_SESSION['userType'];
	// Verify the user
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_password,$log_userType);
//	$errr = $errr  ."999999 ";
//echo $errr . " ";
}
//$errr = $errr . "success ";
//echo $errr . " ";
//echo "success";

?>