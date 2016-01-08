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

	     $fid = "1";

            $sql = "INSERT INTO student_course_faculty_grade ". "(sid, gid, course_id, fid) ". "VALUES('$sid','$grade','$cid','$fid')";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
              // die('Could not enter data: ' . mysql_error());
		echo "0";
            }else{
            
            echo "1";
            
	}

           mysql_close($conn);
         }
         
            ?>

            
           

