<?php

include_once("php_includes/check_login_status.php");

if($_SESSION['userType'] == 'admin'){
   // $img = 'img/profile/admin/'.$_SESSION['userid'] . '.jpg';
    $img = 'img/profile/admin/admin.png';
}else if($_SESSION['userType'] == 'student'){
    $img = 'img/profile/student/'.$_SESSION['userid'] . '.jpg';
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
                <div class="col-md-offset-2">
                   <br> <p style="color:white;"> Welcome, <?php echo $_SESSION['userid']; ?></p>
                </div>
            </div>
        
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
		    <li><a href="admin_acad_dash.php"><i class="fa fa-graduation-cap"></i> <span>Academics</span></a></li>
		    <li><a href="index.php?controller=admin&action=hostel_module"><i class="fa fa-user-secret"></i> <span>Hostel</span></a></li>
		    <li><a href="index.php?controller=admin&action=mess_module"><i class="fa fa-dashboard"></i> <span>Mess</span></a></li>
		    <li><a href="AllTimeTable.php"><i class="fa fa-money"></i> <span>Time Table</span></a></li>
            <li><a href="index.php?controller=admin&action=view_complain"><i class="fa fa-money"></i> <span>View Complain</span></a></li>
             <li><a href="admin_request_certificate.php"><i class="fa fa-money"></i> <span>View Certificate Request</span></a></li>
              </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>

       

    