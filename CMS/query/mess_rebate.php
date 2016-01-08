<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
//include_once("../../php_includes/check_login_status.php");
?>
<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
//session_start();	
$st_id=$_GET['id'];
$status="Pending";
	$date1=$_GET["startDate"];
		$Days=$_GET["days"];
		$Desc=$_GET["description"];
		$note="You have new Rebate application";
		$app="?controller=admin&action=rebate_status";
		$usr_typ="admin";
	$strSQL1 = "INSERT INTO `cms`.`notification` ( `note`,`app`,`usr_typ`) VALUES ('".$note."','".$app."','".$usr_typ."') ";
	$rs1 = mysql_query($strSQL1);	
	$strSQL = "INSERT INTO `cms`.`rebate` ( `st_id`,`from_date`, `no_of_days`,`description`,`status`) VALUES ('".$st_id."','".$date1."', '".$Days."','".$Desc."','".$status."') ";
	$rs = mysql_query($strSQL);
	
		if($rs)
	{
	
		
		
	
		header('Location: ../index.php?controller=student&action=mess_module');
	}
		else
		echo "failed" .mysql_error();
	
?>
