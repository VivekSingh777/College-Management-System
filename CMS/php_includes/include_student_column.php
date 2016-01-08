<?php

include_once("php_includes/check_login_status.php");

if($_SESSION['userType'] == 'admin'){
   // $img = 'img/profile/admin/'.$_SESSION['userid'] . '.jpg';
    $img = 'img/profile/admin/admin.png';
}else if($_SESSION['userType'] == 'student'){
    $img = 'img/profile/student/'.$_SESSION['userid'] . '.jpg';
    if(file_exists ( $img )){

    }else{
        $img = 'img/profile/student/unknown.png';
    }
}else if($_SESSION['userType'] == 'faculty'){
    $img = 'img/profile/faculty/'.$_SESSION['userid'] . '.jpg';
}


?>
<!--button><a href='logout.php'>Logout</a></button-->


    <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="col-md-offset-2">
                    <img src="<?php echo $img ?>" class="img-circle" alt="User Image">
                </div>
                <div class="col-md-offset-0"><br>
                    <p style="color:white;text-align:center;"> Welcome, <?php echo $_SESSION['userid']; ?></p>
                </div>
           </div>
        
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
		    <li><a href="Student_profile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                        <li><a href="student_semresult.php"><i class="fa fa-dashboard"></i> <span>Past Result</span></a></li>
<li><a href="index.php?controller=student&action=hostel_module"><i class="fa fa-user-secret"></i> <span>Hostel</span></a></li>
            <li><a href="index.php?controller=student&action=mess_module"><i class="fa fa-dashboard"></i> <span>Mess</span></a></li>
            <li><a href="index.php?controller=student&action=complain"><i class="fa fa-cogs"></i> <span>Complaint</span></a></li>
            <li><a href="certificate.php"><i class="fa fa-cogs"></i> <span>Certificate Request</span></a></li>
            <li><a href="StudentTimetable.php"><i class="fa fa-money"></i> <span>Time Table</span></a></li>

	        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>

       

    