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
$joindate = date("Y-m-d");;
//$joindate = $_GET['jd'];
$address = $_GET['address'];
$blood = $_GET['blood_group'];
$state = $_GET['state'];
$pin = $_GET['pin'];
$password =md5("password");
$IP = "192.192.192.192";
$rt="";
 ?>

<?php
$conn=mysql_connect("localhost","root","","cms");
 $db=mysql_select_db("cms");
?>
<?php
  $strSQL = "INSERT INTO faculty (fid,firstname, lastname, degree, degree_field, gender, f_email, f_mob_no, address, city, join_date, pin, state, blood_group, ip, password) VALUES 
  			('" . $fid . "',
  				'".$name."', 
  				'".$lastname."', 
  				'".$degree."', 
  				'".$deg_field."', 
  				'".$gen."', 
  				'".$mail."', 
  				'".$mob."', 
  				'".$address."', 
  				'".$city."', 
  				'".$joindate."',
  				'".$pin."', 
  				'".$state."', 
  				'".$blood."',  
  				'".$IP."', 
  				'".$password."')";

  if(mysql_query($strSQL,$conn)){
  	echo $gen . " " . $blood ;
  	echo "1";
  }else{
  	echo "0" . mysql_error();
  }

$url = 'img/temp_img/temp_profile.jpg';
$img = 'img/profile/faculty/' . $fid. '.jpg';
file_put_contents($img, file_get_contents($url));

?>