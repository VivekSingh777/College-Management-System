<?php

$fid = $_GET['f_id'];

 ?>



<?php

$conn=mysqli_connect("localhost","root","","cms");

?>

<?php
  $strSQL = "DELETE FROM faculty WHERE fid='" .$fid."'";

  if(mysqli_query($conn,$strSQL)){
  	echo "1";
  }else{
  	echo "0";
  }

?>