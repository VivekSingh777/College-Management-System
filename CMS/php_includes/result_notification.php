<?php
echo "hello";
$usr_typ="student";
$note="Results has been announce . You can check the Result";
$app="student_semresult.php";
	$strSQL1 = "INSERT INTO `cms`.`notification` ( `note`,`app`,`usr_typ`) VALUES ('".$note."','".$app."','".$usr_typ."') ";
	$rs1 = mysql_query($strSQL1);	


?>