<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
	
//session_start();	
$st_id=$_GET["sid"];
		$hostel_no=$_GET["hostel_no"];
		$room_no=$_GET["room_no"];

//$st_id=201352005;
//		$hostel_no=4;
//		$room_no=10;



	$strSQL = "INSERT INTO `cms`.`hostel_residents` ( `hostel_no`,`room_no`, `sid`) VALUES ('".$hostel_no."','".$room_no."', '".$st_id."') ";
	$rs = mysql_query($strSQL);
	
		if($rs)
	{		
	
		header('location: ../index.php?controller=admin&action=hostel_module');
			}
		else{
				header('location: ../failed.php');
	}

	?>