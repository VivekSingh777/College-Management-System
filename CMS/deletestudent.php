<?php

$sid = $_GET['s_id'];

$conn=mysqli_connect("localhost","root","","cms");

$strSQL = "DELETE FROM student WHERE sid='" .$sid."'";

  if(mysqli_query($conn,$strSQL)){
  	echo "1";
  }else{
  	echo "0";
  }

?>