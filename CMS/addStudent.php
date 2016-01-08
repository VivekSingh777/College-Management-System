<?php

include_once("php_includes/db_conx.php");

	$sid = $_GET['sid'];
	$first_name =  $_GET['first_name'];
	$last_name =  $_GET['last_name'];
	$father_name =  $_GET['father_name'];
	$mother_name =  $_GET['mother_name'];
	$gender =  $_GET['gender'];
	$s_mob_no =  $_GET['s_mob_no'];
	$guardian_email =  $_GET['guardian_email'];
	$guardian_mob_no =  $_GET['guardian_mob_no'];
	$dob =  $_GET['dob'];
	$address =  $_GET['address'];
	$city =  $_GET['city'];
	$pin_code =  $_GET['pin_code'];
	$state =  $_GET['state'];
	$blood_group =  $_GET['blood_group'];
	$category =  $_GET['category'];
	$jee_rank =  $_GET['jee_rank'];
	$jee_roll_no =  $_GET['jee_roll_no'];
	$board = $_GET['board'];
	$branch = $_GET['branch'];
	$batch = $_GET['batch'];
	$status_MC = $_GET['mc'];
	$status_ARC = $_GET['arc'];

	$password = md5("password");

	if(isset($sid) && 
	isset($first_name) &&
	isset($last_name) &&
	isset($father_name) &&
	isset($mother_name) &&
	isset($gender) &&
	isset($s_mob_no) &&
	isset($guardian_email) &&
	isset($dob) &&
	isset($address) &&
	isset($city) &&
	isset($pin_code) &&
	isset($state) &&
	isset($blood_group) &&
	isset($category) &&
	isset($jee_roll_no) &&
	isset($jee_rank) &&
	isset($batch) &&
	isset($branch) &&
	isset($board) &&
	isset($status_ARC) &&
	isset($status_MC))
{
	$sql = "INSERT INTO student (sid, firstname, lastname, password, father_name, mother_name, dob, gender, status_ARA, status_MC, category, s_mob_no, guardian_email, guardian_mob_no, branch, batch, jee_rank, jee_roll_no, board, address, city, state, pin, blood_group, ip) 
			VALUES ('". $sid ."',
					'". $first_name ."',
					'". $last_name ."',
					'". $password ."',
					'". $father_name ."',
					'". $mother_name ."',
					'". $dob ."',
					'". $gender ."',
					'". $status_ARC ."',
					'". $status_MC ."',
					'". $category ."',
					'". $s_mob_no ."',
					'". $guardian_email ."',
					'". $guardian_mob_no ."',
					'". $branch ."',
					'". $batch ."',
					'". $jee_rank ."',
					'". $jee_roll_no ."', 
					'". $board ."', 
					'". $address ."', 
					'". $city ."', 
					'". $state ."', 
					'". $pin_code ."', 
					'". $blood_group ."', 
					'0');";

    $query = mysqli_query($db_conx, $sql);

    if($query){
    	echo "1";
    }

}else{
	echo "0";
}


//Edited code -- upload image using default url -> http://localhost/IIITV_projects/CMS/img/temp_img/temp_profile.jpg

$url = 'img/temp_img/temp_profile.jpg';
$img = 'img/profile/student/' . $sid. '.jpg';
file_put_contents($img, file_get_contents($url));


 ?>