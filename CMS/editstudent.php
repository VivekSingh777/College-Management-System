<?php

$sid = $_GET['s_id'];
$name = $_GET['first_name'];
$lastname = $_GET['last_name'];
$fname = $_GET['father_name'];
$mname = $_GET['mother_name'];
$gen = $_GET['gender'];
$gmail = $_GET['guardian_email'];
$gmob = $_GET['guardian_mobile_no'];
$smob = $_GET['mobile_no'];
$city= $_GET['city'];
$board = $_GET['board'];
$jeerollno = $_GET['jee_roll_no'];
$jeerank = $_GET['jee_rank'];
$address = $_GET['address'];
//$blood = $_GET['bloodgroup'];
$state = $_GET['state'];
$pin = $_GET['pin'];
$password =md5($_GET['password']);
$batch = $_GET['batch'];
//$brch = $_GET['branch'];
$statusara = $_GET['status_ARA'];
$status_mc = $_GET['status_MC'];
$rt="";
 ?>



<?php
$conn=mysqli_connect("localhost","root","","cms");
  //$db=mysql_select_db("cms",$conn);
?>
<?php
  $strSQL = "UPDATE student 
  			SET firstname='".$name."', 
  			lastname='".$lastname."', 
  			father_name='".$fname."', 
  			mother_name='".$mname."', 
  			gender='".$gen."', 
  			status_ARA='".$statusara."', 
  			status_MC='".$status_mc."', 
  			s_mob_no='".$smob."', 
  			guardian_email='".$gmail."', 
  			guardian_mob_no='".$gmob."', 
  			address='".$address."', 
  			city='".$city."', 
  			pin='".$pin."', 
  			state='".$state."',  
  			jee_rank='".$jeerank."', 
  			jee_roll_no='".$jeerollno."', 
  			board='".$board."',  
  			password='".$password."'
			  WHERE sid='".$sid."'";

  if(mysqli_query($conn,$strSQL)){
  	echo "1";
  }else{
  	echo "0";
  }

?>