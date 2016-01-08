<?php

$id = $_GET['id'];
$t = $_GET['usertype'];
$cp = md5($_GET['cp']);
$np = md5($_GET['np']);
$un="";



include_once("php_includes/check_login_status.php");

 ?>

<?php
//$db_conx=mysql_connect("localhost","root","","cms");
// $db=mysql_select_db("cms");
?>
<?php

$var="";
$query="";

if($t == "admin"){

    $sql = "SELECT username,password FROM admin WHERE username='$id' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
    $var="admin";
    $un="username";
    //echo "1";
    }
    
    if($t == "faculty"){

    $sql = "SELECT fid, password FROM faculty WHERE fid='$id' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
    $var="faculty";
    $un="fid";
    //echo "11";
    }
    
    if($t == "staff"){
  
    $sql = "SELECT staff_id, password FROM staff WHERE staff_id='$id' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
    $var="staff";
    $un="staff_id";
    //echo "111";
    }
    if($t == "student"){
  
    $sql = "SELECT sid, password FROM student WHERE sid='$id' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
  $var="student";
  $un="sid";
  //echo "1111";
    } 

    $row = mysqli_fetch_row($query);
    $db_id = $row[0];
    $db_password = $row[1];
    if($cp != $db_password){
      echo "2";
            //exit();
    }else{

    $sql1 = "UPDATE $var SET password = '".$np."'  WHERE $un='$db_id' LIMIT 1";
        $query1 = mysqli_query($db_conx, $sql1);
      if($query1){
        echo "1";
      }else{
        echo "0";
      }
    }


    
?>