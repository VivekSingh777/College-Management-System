<?php

include_once("php_includes/check_login_status.php");

if($_SESSION['userType'] == 'admin'){
   // $img = 'img/profile/admin/'.$_SESSION['userid'] . '.jpg';
    $img = 'img/profile/admin/admin.png';
}else if($_SESSION['userType'] == 'student'){
    $img = 'img/profile/student/'.$_SESSION['userid'] . '.jpg';
}else if($_SESSION['userType'] == 'faculty'){
    $img = 'img/profile/faculty/'.$_SESSION['userid'] . '.jpg';
     if(file_exists ( $img )){

    }else{
        $img = 'img/profile/faculty/unknown.jpg';
    }
}


?>
<!--button><a href='logout.php'>Logout</a></button-->


    <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="">
                    <img src="<?php echo $img ?>" class="img-circle" alt="User Image">
                </div>
                <div class="col-md-offset-0"><br>
                    <p style="color:white;text-align:center;"> Welcome, <span id="id"><?php echo $_SESSION['userid']; ?></span></p>
                </div>
            </div>
        
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
            <li><a href="faculty_profile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
		    <li><a href="UploadGrade.php"><i class="fa fa-graduation-cap"></i> <span>Grade Upload</span></a></li>
		    <li><a href="FacTimeTable.php"><i class="fa fa-money"></i> <span>Time Table</span></a></li>\
	        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>

       

    