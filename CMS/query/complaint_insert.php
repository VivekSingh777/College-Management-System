<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
	
?>
<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
//session_start();	
$st_id=$_GET['id'];;
$status="Pending";
	$comp_module=$_GET["module"];
	$comp_description=$_GET["description"];
	
	$strSQL = "INSERT INTO `cms`.`complaint` ( `sid`,`Request_type`,`subject_description`,`status`) VALUES ('".$st_id."','".$comp_module."', '".$comp_description."','".$status."') ";
	$rs = mysql_query($strSQL);
	
		if($rs)
	{
	
	echo "your complaint has been submitted";	
		
	
		header('Location: ../index.php?controller=student&action=complain');
	}
		else
		echo "failed" .mysql_error();
	
?>
