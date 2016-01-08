 <?php

         if(isset($_GET['sid']) && $_GET['grade'] && $_GET['cid'])
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn=mysql_connect("localhost","root","");
            $db=mysql_select_db("cms",$conn);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            
             $sid = $_GET['sid'];

	     $grade = $_GET['grade'];

	     $cid = $_GET['cid'];

	   //  $fid = "007";

            $sql = "UPDATE student_course_faculty_grade SET gid = '".$grade ."' WHERE sid = '".$sid."' and course_id = '".$cid."'";
               
	    //echo "UPDATE student_course_faculty_grade SET gid=".$grade." WHERE sid = ".$sid." AND gid=".$grade." AND cid=".$cid;

            //mysql_select_db('test_db');
            
		$retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());

		echo "0";
            }else{
            
            echo "1";
            
	}

           mysql_close($conn);
         }
         
            ?>

            
           




            
            
           

