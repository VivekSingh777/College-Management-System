<?php

$fid = $_GET['f_id'];
$name = $_GET['first_name'];
$lastname = $_GET['last_name'];
$degree = $_GET['degree'];
$deg_field = $_GET['degree_field'];
$gen = $_GET['gender'];
$mail = $_GET['email'];
$mob = $_GET['mobile_no'];
$city= $_GET['city'];
$joindate = $_GET['joindate'];
$address = $_GET['address'];
//$blood = $_GET['bloodgroup'];
$state = $_GET['state'];
$pin = $_GET['pin'];
$password =md5($_GET['password']);
$IP = "192.192.192.192";
$rt="";
 ?>



<?php
$conn=mysqli_connect("localhost","root","","cms");
  //$db=mysql_select_db("cms",$conn);
?>
<?php
  $strSQL = "UPDATE faculty SET firstname = '".$name."', 
  								lastname = '".$lastname."',
  								degree = '".$degree."', 
  								degree_field = '".$deg_field."', 
  								gender = '".$gen."', 
  								f_email = '".$mail."', 
  								f_mob_no = '".$mob."', 
  								address = '".$address."', 
  								city = '".$city."', 
  								join_date = '".$joindate."', 
  								pin = '".$pin."',
  								state = '".$state."', 
  								password = '".$password."'
  								WHERE fid = '".$fid."'" ;

  if(mysqli_query($conn,$strSQL)){
  	echo "yo";
  }else{
  	echo "no";
  }


$url = 'img/temp_img/temp_profile.jpg';
$img = 'img/profile/faculty/' . $fid. '.jpg';
file_put_contents($img, file_get_contents($url));

?>