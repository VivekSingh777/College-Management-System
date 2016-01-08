<?php 

include_once("../php_includes/check_login_status.php");
// be aware of file / directory permissions on your server

//if(move_uploaded_file($_FILES['webcam']['tmp_name'], 'img/people/'.$_SESSION['userid'].'.jpg')){
//	echo "success";
//$pid_id=md5(time()).rand(383,1000);
move_uploaded_file($_FILES['webcam']['tmp_name'], '../img/temp_img/temp_profile.jpg');


/*$url = 'img/temp_img/temp_profile.jpg';
$img = 'img/profile/student/' . $sid. '.jpg';
file_put_contents($img, file_get_contents($url));*/


//$_SESSION['pic_id']=$pic_id;
?>