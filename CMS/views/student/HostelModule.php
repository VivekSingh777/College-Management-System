<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Hostel Module</li>
</ul>

    <section class="content">
        

<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-graduation-cap"></i> Hostel</h3>
	</div>
	<div class="box-body">

	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="?controller=student&action=roomwise_student_details&st_id=<?php echo $_SESSION['userid']  ?>">Roomwise Student Details</a></span>
		         </div><!-- /.info-box-content -->
		      </div><!-- /.info-box -->
		</div>

<?php

include_once("php_includes/footer.php");

 ?>

    </body></html>