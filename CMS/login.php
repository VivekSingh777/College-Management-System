<?php
include_once("php_includes/check_login_status.php");
// If user is already logged in, header that weenis away
//echo "GGGG";

//$errr = $errr . "Login";
//echo $errr;
if($user_ok == true){
	header("location: user.php?u=".$_SESSION["userid"]);
	//echo "header";

    exit();
}

//echo "header_over";
// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if(isset($_GET['u'])){

	//echo "isset";

	// CONNECT TO THE DATABASE
	include_once("php_includes/db_conx.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
	$u = mysqli_real_escape_string($db_conx, $_GET['u']);
	$p = md5($_GET['p']);
	$t = mysqli_real_escape_string($db_conx, $_GET['t']);
		// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

	// FORM DATA ERROR HANDLING

	//echo "  u   "  . $u ." p   ". $p .  "  t   " . $t;
	
	// END FORM DATA ERROR HANDLING} 
        
		if($t == "admin"){

		$sql = "SELECT username, password FROM admin WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
		
		}
		
		if($t == "faculty"){

		$sql = "SELECT fid, password FROM faculty WHERE fid='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
		
		}
		
		if($t == "staff"){
	
		$sql = "SELECT staff_id, password FROM staff WHERE staff_id='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
		
		}
		if($t == "student"){
	
		$sql = "SELECT sid, password FROM student WHERE sid='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
	
		}	
		
        $row = mysqli_fetch_row($query);
		$db_id = $row[0];
		$db_password = $row[1];
		if($p != $db_password){
			echo "login_failed";
            exit();
		} else {
			// CREATE THEIR SESSIONS AND COOKIES
			
			$_SESSION['userid'] = $db_id;
			
			$_SESSION['password'] = $db_password;

			$_SESSION['userType'] = $t;			

			$_SESSION['pic_id']="";

			setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("password", $db_password, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("userType", $t, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("pic_id", "", strtotime( '+30 days' ), "/", "", "", TRUE);
    	    // UPDATE THEIR "IP" 
			
		if($t == "admin"){
		$sql = "UPDATE admin SET ip='$ip' WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
		
		}
		
		if($t == "faculty"){

		$sql = "UPDATE faculty SET ip='$ip' WHERE fid='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
		
		}
		
		if($t == "staff"){
	
		$sql = "UPDATE staff SET ip='$ip' WHERE staff_id='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
		
		}
		if($t == "student"){
	
		$sql = "UPDATE student SET ip='$ip' WHERE sid='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
	
		}

    	    echo "success";

    	     exit();
		
		}
	
	}
	

?>
