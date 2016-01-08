<?php
$conn=mysql_connect("localhost","root","");
            $db=mysql_select_db("cms",$conn);
            

$cid = $_GET['cid'];
$status = $_GET['status'];
$sql = "UPDATE student_certificate_requests SET status = '".$status."' WHERE  c_id = '".$cid."'";
               
	    //echo "UPDATE student_certificate_requests SET status = '".$status."' WHERE  c_id = '".$cid."'";

            //mysql_select_db('test_db');
            
		$retval = mysql_query( $sql );
            

		if($retval){
			
		header("location:admin_request_certificate.php");
		///	echo "updated";

		}else{

			//echo "error";

		}

?>
