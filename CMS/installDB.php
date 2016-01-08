<?php

$author = "Team 3";

echo "Created by : " . $author;

//echo "<h2>DB creation Process Ver 1.0 starts </br></h2>";
//echo "<h2>DB creation Process Ver 1.1 starts </br></h2>";
echo "<h2>DB creation Process Ver 1.2 starts </br></h2>";

include_once("php_includes/conx.php");

$tbl_student = "CREATE TABLE IF NOT EXISTS student (
              sid INT NOT NULL,
              firstname VARCHAR(50) NOT NULL,
              lastname VARCHAR(50) NOT NULL,
              password VARCHAR(50) NOT NULL,
			  father_name VARCHAR(50) NOT NULL,
			  mother_name VARCHAR(50) NOT NULL,
              dob DATE NOT NULL,
			  gender ENUM('m','f') NOT NULL DEFAULT 'f',
			  status_ARA ENUM('0','1') NOT NULL  DEFAULT '0',
			  status_MC ENUM('0','1') NOT NULL  DEFAULT '0',
              category ENUM('sc','st','obc','gen') NOT NULL  DEFAULT 'gen',
			  s_mob_no VARCHAR(10) NOT NULL,
			  guardian_email VARCHAR(50) NOT NULL,
			  guardian_mob_no VARCHAR(10) NOT NULL,
			  branch ENUM('it','cse') NOT NULL DEFAULT 'it',
			  jee_rank VARCHAR(10) NOT NULL,
			  jee_roll_no VARCHAR(10) NULL,
			  board VARCHAR(30) NOT NULL,
			  address VARCHAR(40) NOT NULL,
			  city VARCHAR(6) NOT NULL,
			  state VARCHAR(25) NOT NULL,
			  pin VARCHAR(6) NOT NULL,
			  batch VARCHAR(4) NOT NULL,
			  blood_group ENUM('ABP','ABN','AP','AN','BP','BN','OP','ON') DEFAULT 'OP',
              ip VARCHAR(60) NOT NULL,
              PRIMARY KEY (sid)
             )";

$query = mysqli_query($db_conx, $tbl_student);

if ($query === TRUE) {
	echo "<h3>student table created OK :) </h3>"; 
} else {
	echo "<h3>student table NOT created :( </h3>" ;

    die("Error : " .mysqli_error($db_conx)); 
}

////////////////////////////////////

$tbl_faculty = "CREATE TABLE IF NOT EXISTS faculty ( 
              fid VARCHAR(30) NOT NULL,
              firstname VARCHAR(50) NOT NULL,
              lastname VARCHAR(50) NOT NULL,
              password VARCHAR(50) NOT NULL,
			  gender ENUM('m','f') NOT NULL DEFAULT 'f',
			  degree VARCHAR(10) NOT NULL,
			  degree_field VARCHAR(35) NOT NULL, 
			  f_mob_no VARCHAR(10) NULL,
			  f_email VARCHAR(50) NULL,
			  address VARCHAR(60) NOT NULL,
			  city VARCHAR(6) NOT NULL,
			  state VARCHAR(25) NOT NULL,
			  pin VARCHAR(6) NOT NULL,
			  join_date DATE NOT NULL,
			  blood_group ENUM('ABP','ABN','AP','AN','BP','BN','OP','ON') DEFAULT 'OP',
              ip VARCHAR(60) NOT NULL,
              PRIMARY KEY (fid)
             )"; 
$query = mysqli_query($db_conx, $tbl_faculty); 
if ($query === TRUE) {
	echo "<h3>faculty table created OK :) </h3>"; 
} else {
	echo "<h3>faculty table NOT created :( </h3>"; 
}
////////////////////////////////////
$tbl_staff = "CREATE TABLE IF NOT EXISTS staff ( 
                staff_id INT(11) NOT NULL AUTO_INCREMENT,
                firstname VARCHAR(30) NOT NULL,
              	lastname VARCHAR(30) NOT NULL,
              	password VARCHAR(30) NOT NULL,
			  	gender ENUM('m','f') NOT NULL DEFAULT 'f',
			  	designation VARCHAR(20) NOT NULL,
			  	join_date DATE NOT NULL, 
			    mob_no VARCHAR(10) NULL,
			    email VARCHAR(30) NULL,
			    address VARCHAR(40) NOT NULL,
			    city VARCHAR(6) NOT NULL,
			    state VARCHAR(25) NOT NULL,
			    pin VARCHAR(6) NOT NULL,
				blood_group ENUM('ABP','ABN','AP','AN','BP','BN','OP','ON') DEFAULT 'OP',
                ip VARCHAR(60) NOT NULL,
                PRIMARY KEY (staff_id)
             )"; 
$query = mysqli_query($db_conx, $tbl_staff); 
if ($query === TRUE) {
	echo "<h3>staff table created OK :) </h3>"; 
} else {
	echo "<h3>staff table NOT created :( </h3>" . mysqli_error() ; 
}

////////////////////////////////////
$tbl_admin = "CREATE TABLE IF NOT EXISTS admin ( 
                username VARCHAR(20) NOT NULL,
                password VARCHAR(50) NOT NULL,
                ip VARCHAR(60) NOT NULL,
                PRIMARY KEY (username)
             )"; 
$query = mysqli_query($db_conx, $tbl_admin); 
if ($query === TRUE) {
    echo "<h3>admin table created OK :) </h3>"; 
} else {
    echo "<h3>admin table NOT created :( </h3>" ; 
}

////////////////////////////////////

$tbl_grade = "CREATE TABLE IF NOT EXISTS grade ( 
                gid VARCHAR(2) NOT NULL,
                grade INT NOT NULL,
                PRIMARY KEY (gid) 
                )"; 
$query = mysqli_query($db_conx, $tbl_grade); 
if ($query === TRUE) {
	echo "<h3>grade table created OK :) </h3>"; 
} else {
	echo "<h3>grade table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_room = "CREATE TABLE IF NOT EXISTS room ( 
                room_no VARCHAR(5) NOT NULL,
                PRIMARY KEY (room_no) 
                )"; 
$query = mysqli_query($db_conx, $tbl_room); 
if ($query === TRUE) {
	echo "<h3>room table created OK :) </h3>"; 
} else {
	echo "<h3>room table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_hostel = "CREATE TABLE IF NOT EXISTS hostel ( 
                hostel_no VARCHAR(2) NOT NULL,
                PRIMARY KEY (hostel_no) 
                )"; 

$query = mysqli_query($db_conx, $tbl_hostel); 
if ($query === TRUE) {
	echo "<h3>hostel table created OK :) </h3>"; 
} else {
	echo "<h3>hostel table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_hostel_residents = "CREATE TABLE IF NOT EXISTS hostel_residents ( 
                hostel_no VARCHAR(2) NOT NULL REFERENCES hostel(hostel_no),
                room_no VARCHAR(2) NOT NULL REFERENCES room(room_no),
                sid INT NOT NULL REFERENCES student(sid),
                PRIMARY KEY (hostel_no,room_no,sid) 
                )"; 

$query = mysqli_query($db_conx, $tbl_hostel_residents); 
if ($query === TRUE) {
    echo "<h3>hostel_residents table created OK :) </h3>"; 
} else {
    echo "<h3>hostel_residents table NOT created :( </h3>"; 
}

////////////////////////////////////


$tbl_resources = "CREATE TABLE IF NOT EXISTS resources ( 
                resource_id VARCHAR(2) NOT NULL,
                resource VARCHAR(10) NOT NULL,
                count int(11) NOT NULL,
                purchase_date DATE NOT NULL,
                warranty_period int(11) NOT NULL,
                PRIMARY KEY (resource_id) 
                )"; 

$query = mysqli_query($db_conx, $tbl_resources); 
if ($query === TRUE) {
	echo "<h3>resource table created OK :) </h3>"; 
} else {
	echo "<h3>resource table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_fees = "CREATE TABLE IF NOT EXISTS fees ( 
                fee_id INT NOT NULL AUTO_INCREMENT,
                fee_type ENUM('academic','mess','hostel','transport') NOT NULL DEFAULT 'academic',
                paymode ENUM('NEFT','online','offline','RTGS','DD') NOT NULL DEFAULT 'offline',
				bank VARCHAR(40) NOT NULL,
                branch VARCHAR(30) NOT NULL,
                uploaddate DATE NOT NULL,
                status ENUM('0','1') NOT NULL  DEFAULT '0',
                PRIMARY KEY (fee_id) 
                )"; 
$query = mysqli_query($db_conx, $tbl_fees); 
if ($query === TRUE) {
	echo "<h3>fees table created OK :) </h3>"; 
} else {
	echo "<h3>fees table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_certificate = "CREATE TABLE IF NOT EXISTS certificate ( 
                cid INT(11) NOT NULL AUTO_INCREMENT,
                request_type VARCHAR(50) NOT NULL,
                purpose VARCHAR(30) NOT NULL,
                request_date DATE NOT NULL,
                PRIMARY KEY (cid) 
                )"; 
$query = mysqli_query($db_conx, $tbl_certificate); 
if ($query === TRUE) {
	echo "<h3>certificate table created OK :) </h3>"; 
} else {
	echo "<h3>certificate table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_rebate = "CREATE TABLE IF NOT EXISTS rebate ( 
                rid INT(11) NOT NULL AUTO_INCREMENT,
                st_id int(10) NOT NULL,
                apply_date DATE NOT NULL ,
                from_date DATE NOT NULL,
                no_of_days int(10) NOT NULL,
                description VARCHAR(255) NOT NULL,
                status VARCHAR(12) NOT NULL,
                Action int(11) NOT NULL, 
                PRIMARY KEY (rid) 
                )"; 
$query = mysqli_query($db_conx, $tbl_rebate); 
if ($query === TRUE) {
	echo "<h3>rebate table created OK :) </h3>"; 
} else {
	echo "<h3>rebate table NOT created :( </h3>"; 
}
////////////////////////////////////
$tbl_complaint = "CREATE TABLE IF NOT EXISTS complaint ( 
                complaint_id INT(11) NOT NULL AUTO_INCREMENT,
                sid VARCHAR(20) NOT NULL,
                apply_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                request_type ENUM('academic','mess','hostel','transport') NOT NULL DEFAULT 'academic',
                subject_description VARCHAR(30) NOT NULL,
                no_of_days int(11) NOT NULL,
                status VARCHAR(12) NOT NULL,
                reply VARCHAR(100) NOT NULL,
                Action int(11) NOT NULL,

                PRIMARY KEY (complaint_id) 
                )"; 
$query = mysqli_query($db_conx, $tbl_complaint); 
if ($query === TRUE) {
	echo "<h3>complaint table created OK :) </h3>"; 
} else {
	echo "<h3>complaint table NOT created :( </h3>"; 
}
////////////////////////////////////
$tbl_course = "CREATE TABLE IF NOT EXISTS course ( 
                course_id VARCHAR(10) NOT NULL,
                course_name VARCHAR(10) NOT NULL,
                course_credit INT NOT NULL,
                PRIMARY KEY (course_id) 
                )"; 
$query = mysqli_query($db_conx, $tbl_course); 
if ($query === TRUE) {
	echo "<h3>course table created OK :) </h3>"; 
} else {
	echo "<h3>course table NOT created :( </h3>"; 
}

////////////////////////////////////
$tbl_semester = "CREATE TABLE IF NOT EXISTS semester ( 
                sem_id VARCHAR(10) NOT NULL,
                season ENUM('Autumn','Winter') NOT NULL DEFAULT 'Autumn',
                PRIMARY KEY (sem_id) 
                )"; 
$query = mysqli_query($db_conx, $tbl_semester); 
if ($query === TRUE) {
	echo "<h3>semester table created OK :) </h3>"; 
} else {
	echo "<h3>semester table NOT created :( </h3>"; 
}

////////////////////////////////////
$tbl_spf = "CREATE TABLE IF NOT EXISTS student_pays_fees ( 
                sid INT NOT NULL REFERENCES student(sid),
                fee_id INT NOT NULL REFERENCES fees(fee_id),
                PRIMARY KEY (sid,fee_id)
                )"; 

$query = mysqli_query($db_conx, $tbl_spf); 

//if (!$query) {
  //  die('Invalid query: ' . mysqli_error($query));
//}

if ($query === TRUE) {
	echo "<h3>student_pays_fees table created OK :) </h3>"; 
} else {
	echo "<h3>student_pays_fees table NOT created :( </h3>" ; 
}
////////////////////////////////////

$tbl_sec = "CREATE TABLE IF NOT EXISTS student_enrolls_course ( 
                sid VARCHAR(10) NOT NULL REFERENCES student(sid),
                course_id VARCHAR(10) NOT NULL REFERENCES course(course_id) ,
                acadyear YEAR NOT NULL,
                PRIMARY KEY (sid,course_id)
                )"; 

$query = mysqli_query($db_conx, $tbl_sec); 
if ($query === TRUE) {
	echo "<h3>student_enrolls_course table created OK :) </h3>"; 
} else {
	echo "<h3>student_enrolls_course table NOT created :( </h3>"; 
}
////////////////////////////////////
$tbl_srfs = "CREATE TABLE IF NOT EXISTS student_registers_for_semester ( 
                sid INT NOT NULL REFERENCES student(sid),
                sem_id VARCHAR(10) NOT NULL REFERENCES semester(sem_id),
                acadyear YEAR NOT NULL,
                PRIMARY KEY (sid,sem_id)
                )"; 

$query = mysqli_query($db_conx, $tbl_srfs); 
if ($query === TRUE) {
	echo "<h3>student_registers_for_semester table created OK :) </h3>"; 
} else {
	echo "<h3>student_registers_for_semester table NOT created :( </h3>"; 
}

////////////////////////////////////
/*
$tbl_scomp = "CREATE TABLE IF NOT EXISTS student_complaints ( 
                sid VARCHAR(10) NOT NULL REFERENCES student(sid),
                complaint_id VARCHAR(10) NOT NULL REFERENCES complaint(complaint_id),
                status ENUM('0','1') NOT NULL  DEFAULT '0',
                PRIMARY KEY (sid,complaint_id)  
                )"; 

$query = mysqli_query($db_conx, $tbl_scomp); 
if ($query === TRUE) {
	echo "<h3>student_complaints table created OK :) </h3>"; 
} else {
	echo "<h3>student_complaints table NOT created :( </h3>"; 
}
*/
////////////////////////////////////

$tbl_scert = "CREATE TABLE IF NOT EXISTS student_certificate_requests ( 
                sid VARCHAR(10) NOT NULL REFERENCES student(sid),
                c_id VARCHAR(10) NOT NULL REFERENCES certificate(cid),
                status VARCHAR(10) NOT NULL DEFAULT 'Pending',
                PRIMARY KEY (sid,c_id)
                )"; 

$query = mysqli_query($db_conx, $tbl_scert); 
if ($query === TRUE) {
	echo "<h3>student_certificate_requests table created OK :) </h3>"; 
} else {
	echo "<h3>student_certificate_requests table NOT created :( </h3>"; 
}
////////////////////////////////////

$tbl_sroom = "CREATE TABLE IF NOT EXISTS student_room ( 
                sid VARCHAR(10) NOT NULL REFERENCES student(sid),
                room_no VARCHAR(10) NOT NULL REFERENCES room(room_no),
                PRIMARY KEY (sid,room_no)  
                )"; 

$query = mysqli_query($db_conx, $tbl_sroom); 
if ($query === TRUE) {
	echo "<h3>student_room table created OK :) </h3>"; 
} else {
	echo "<h3>student_room table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_hr = "CREATE TABLE IF NOT EXISTS hostel_room ( 
                hostel_no VARCHAR(10) NOT NULL REFERENCES hostel(hostel_no),
                room_no VARCHAR(10) NOT NULL REFERENCES room(room_no) ,
                PRIMARY KEY (hostel_no,room_no)
                )"; 

$query = mysqli_query($db_conx, $tbl_hr); 
if ($query === TRUE) {
	echo "<h3>hostel_room table created OK :) </h3>"; 
} else {
	echo "<h3>hostel_room table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_rr = "CREATE TABLE IF NOT EXISTS room_resources ( 
                room_no VARCHAR(10) NOT NULL REFERENCES room(room_no),
                rid VARCHAR(10) NOT NULL REFERENCES resource(rid),
                count INT NOT NULL,
                PRIMARY KEY (room_no,rid)
                )"; 

$query = mysqli_query($db_conx, $tbl_rr); 
if ($query === TRUE) {
	echo "<h3>room_resources table created OK :) </h3>"; 
} else {
	echo "<h3>room_resources table NOT created :( </h3>"; 
}
////////////////////////////////////

$tbl_sc = "CREATE TABLE IF NOT EXISTS semester_courses ( 
                sem_id VARCHAR(10) NOT NULL REFERENCES semester(sem_id),
                course_id VARCHAR(10) NOT NULL REFERENCES course(course_id),
                type ENUM('core','elective') NOT NULL DEFAULT 'core',
                PRIMARY KEY (sem_id,course_id)
                )"; 

$query = mysqli_query($db_conx, $tbl_sc); 
if ($query === TRUE) {
	echo "<h3>semester_courses table created OK :) </h3>"; 
} else {
	echo "<h3>semester_courses table NOT created :( </h3>"; 
}


////////////////////////////////////

$tbl_cf = "CREATE TABLE IF NOT EXISTS course_faculty ( 
                fid VARCHAR(30) NOT NULL REFERENCES faculty(fid),
                course_id VARCHAR(10) NOT NULL REFERENCES course(course_id) ,
                acadyear YEAR NOT NULL,
                PRIMARY KEY (fid,course_id,acadyear)
                )"; 

$query = mysqli_query($db_conx, $tbl_cf); 
if ($query === TRUE) {
	echo "<h3>course_faculty table created OK :) </h3>"; 
} else {
	echo "<h3>course_faculty table NOT created :( </h3>"; 
}

////////////////////////////////////

$tbl_scfg = "CREATE TABLE IF NOT EXISTS student_course_faculty_grade (
 				sid VARCHAR(10) NOT NULL REFERENCES student(sid),
                course_id VARCHAR(10) NOT NULL REFERENCES course(course_id),
                fid VARCHAR(30) NOT NULL REFERENCES faculty(fid),
                gid VARCHAR(10) NOT NULL REFERENCES grade(gid),
                acadyear VARCHAR(4) NOT NULL,
                PRIMARY KEY (sid,course_id,fid)
                )"; 

$query = mysqli_query($db_conx, $tbl_scfg); 
if ($query === TRUE) {
	echo "<h3>student_course_faculty_grade table created OK :) </h3>"; 
} else {
	echo "<h3>student_course_faculty_grade table NOT created :( </h3>"; 
}



$notification= " CREATE TABLE IF NOT EXISTS `notification` (
  `note_id` int(11) NOT NULL,
  `note` varchar(200) NOT NULL,
  `app` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL DEFAULT 'Active',
  `usr_typ` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1";

$query = mysqli_query($db_conx, $notification); 
if ($query === TRUE) {
    echo "<h3>notification table created OK :) </h3>"; 
} else {
    echo "<h3>notification table NOT created :( </h3>"; 
}
echo "<h2>DB creation Process Ver 1.0 ends</h2>";


$query="INSERT INTO `admin` (`username`, `password`, `ip`) VALUES
('Team3','58e6f2c12f1d05253b663c6744b9e93c',1)";

$query = mysqli_query($db_conx, $query); 
if ($query === TRUE) {
    echo "<h3>admin value table created OK :) </h3>"; 
} else {
    echo "<h3>admin value table NOT created :( </h3>"; 
}
echo "<h2>DB creation Process Ver 1.0 ends</h2>";


?>