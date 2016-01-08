<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Hostel Module</li>
</ul>

    <section class="content">
        

<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-graduation-cap"></i> Hostel</h3>
	</div>
	<div class="box-body">

		<div class="col-md-4 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="?controller=admin&action=resource_distribution_details">Resource Distribution Details</a></span>
		         </div><!-- /.info-box-content -->
		      </div><!-- /.info-box -->
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="?controller=admin&action=roomwise_student_details">Roomwise Student Details</a></span>
		         </div><!-- /.info-box-content -->
		      </div><!-- /.info-box -->
		</div>


<?php

include_once("php_includes/footer.php");

 ?>

    </body></html>