<?php
if(isset($_POST['edit'])){
/*
$Sl1=$_POST['Sl1'];
$Sl2=$_POST['Sl2'];
$Sl3=$_POST['Sl3'];
$Sl4=$_POST['Sl4'];

$MSl1=$_POST['MSl1'];
$MSl2=$_POST['MSl2'];
$MSl3=$_POST['MSl3'];
$MSl4=$_POST['MSl4'];

$MSl1F=$_POST['MSl1F'];
$MSl2F=$_POST['MSl2F'];
$MSl3F=$_POST['MSl3F'];
$MSl4F=$_POST['MSl4F'];

$MSl1R=$_POST['MSl1R'];
$MSl2R=$_POST['MSl2R'];
$MSl3R=$_POST['MSl3R'];
$MSl4R=$_POST['MSl4R'];
*/
//tuesday
/*
$TSl1=$_POST['TSl1'];
$TSl2=$_POST['TSl2'];
$TSl3=$_POST['TSl3'];
$TSl4=$_POST['TSl4'];

$TSl1F=$_POST['TSl1F'];
$TSl2F=$_POST['TSl2F'];
$TSl3F=$_POST['TSl3F'];
$TSl4F=$_POST['TSl4F'];

$TSl1R=$_POST['TSl1R'];
$TSl2R=$_POST['TSl2R'];
$TSl3R=$_POST['TSl3R'];
$TSl4R=$_POST['TSl4R'];
//WEdnesday

$WSl1F=$_POST['WSl1F'];
$WSl2F=$_POST['WSl2F'];
$WSl3F=$_POST['WSl3F'];
$WSl4F=$_POST['WSl4F'];

$WSl1=$_POST['WSl1'];
$WSl2=$_POST['WSl2'];
$WSl3=$_POST['WSl3'];
$WSl4=$_POST['WSl4'];

$WSl1R=$_POST['WSl1R'];
$WSl2R=$_POST['WSl2R'];
$WSl3R=$_POST['WSl3R'];
$WSl4R=$_POST['WSl4R'];
//Thursday
$ThSl1=$_POST['ThSl1'];
$ThSl2=$_POST['ThSl2'];
$ThSl3=$_POST['ThSl3'];
$ThSl4=$_POST['ThSl4'];

$ThSl1F=$_POST['ThSl1F'];
$ThSl2F=$_POST['ThSl2F'];
$ThSl3F=$_POST['ThSl3F'];
$ThSl4F=$_POST['ThSl4F'];

$ThSl1R=$_POST['ThSl1R'];
$ThSl2R=$_POST['ThSl2R'];
$ThSl3R=$_POST['ThSl3R'];
$ThSl4R=$_POST['ThSl4R'];

//Friday

$FSl1=$_POST['FSl1'];
$FSl2=$_POST['FSl2'];
$FSl3=$_POST['FSl3'];
$FSl4=$_POST['FSl4'];

$FSl1F=$_POST['FSl1F'];
$FSl2F=$_POST['FSl2F'];
$FSl3F=$_POST['FSl3F'];
$FSl4F=$_POST['FSl4F'];

$FSl1R=$_POST['FSl1R'];
$FSl2R=$_POST['FSl2R'];
$FSl3R=$_POST['FSl3R'];
$FSl4R=$_POST['FSl4R'];

*/
}else echo "Not sub,itted";



?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="Keywords" content="edusec,edusec4,rudra softech,open source development in ahmedabad, college management software,college management system,education management software,school management system,school management software">
		<meta name="Description" content="Software development company for open source technology in Ahmedabad. Provide Enterprise solution and quality services.">
		<meta property="og:locale" content="en_US">
		<meta property="og:title" content="Rudra Softech - Provide Enterprise Solution | Development on open source technology | College Management Software | School Management Software">
		<meta property="og:description" content="Core functions like admissions, library management, transport management, students attendance in short entire range of university functions can be well performed by EduSec">
		<meta property="og:image" content="http://www.rudrasoftech.com/rudra.png">

	<link rel="shortcut icon" href="http://localhost:8081/CMS/images/rudrasoftech_favicon.png" type="image/x-icon">
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="M3pDWEhkNG9jLywVIDsDB3AVeyoMM1YcAD4kGjw9RwxhADVrPSZFDQ==">
        <title>Rebate Status</title>
        <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/AdminLTE.css" rel="stylesheet">
<link href="font-awesome-4.4.0/css/font-awesome.css" rel="stylesheet">
<link href="css/ionicons.css" rel="stylesheet">
<link href="css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/EdusecCustome.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/yii.js"></script>
<script src="js/bootstrap.js"></script>
<script src="htm/app.htm"></script>
<script src="htm/jquery.htm"></script>
<script src="htm/bootstrap-multiselect.htm"></script>
<script src="htm/custom-delete-confirm.htm"></script>
<script src="htm/bootbox.htm"></script>
<script src="htm/bootstrap.htm"></script>
<script src="htm/bootstrapx-clickover.htm"></script>    </head>
    <body class="skin-black">
    	
<header class="header">

<a class="logo" href="Admin Dashboard.htm"><img src="image/iiit_img.png" alt="" height="22px" width="120px;"></a>
<nav class="navbar navbar-static-top" role="navigation">

<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<div class="navbar-right">

<ul class="nav navbar-nav">
<li class="module-menu">
	<form action="/CMS/index.php?r=site%2Flanguage" method="post" style="margin-top: 10px;">
<input name="_method" type="hidden">
<input name="_csrf" value="M3pDWEhkNG9jLywVIDsDB3AVeyoMM1YcAD4kGjw9RwxhADVrPSZFDQ==" type="hidden">	<div class="col-sm-6 no-padding">
	</div>

	</form></li>
<li class="dropdown module-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Main Menu">
		<i class="fa fa-th"></i>
    </a>
	
<ul class="dropdown-menu">
    <li>
        <ul class="menu">
			            <li>
				<a href="Master Configuration.htm"><i class="fa fa-cogs text-aqua fa-2x"></i><h4> Configuration</h4></a>            </li>
						            <li>
				<a href="Dashboard Modules.htm"><i class="fa fa-dashboard text-green fa-2x"></i> <h4>Dashboard</h4></a>            </li>
						            <li>
				<a href="Manage Course Moodules.htm"><i class="fa fa-graduation-cap text-yellow fa-2x"></i> <h4>Course</h4></a>            </li>
						            <li>
				<a href="Student Module.htm"><i class="fa fa-users text-orange fa-2x"></i> <h4>Student</h4></a>            </li>
						            <li>
				<a href="Employee Module.htm"><i class="fa fa-user text-purple fa-2x"></i> <h4>Employee</h4></a>            </li>
						            <li>
				<a href="Fees Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Fees</h4></a>            </li>
						            <li>
				<a href="Report Center.htm"><i class="fa fa-line-chart text-blue fa-2x"></i> <h4>Report Center</h4></a>            </li>
						            <li>
				<a href="Assignments.htm"><i class="fa fa-user-secret text-orange fa-2x"></i> <h4>User Rights</h4></a>            </li>
  <li>
				<a href="Mess Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Mess</h4></a>            </li>
						              <li>
				<a href="Hostel Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>hostel</h4></a>            </li>
						             
  <li>
				<a href="Transotation Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Transpotation</h4></a>            </li>
						            <li></ul>
    </li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">0</span>
    </a>
    <ul class="dropdown-menu">

        <li class="header">You have No notifications</li>
	    </ul>
</li>

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>admin <i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu" style="margin-right:10px">
            <!-- User image -->
            <li class="user-header bg-light-blue">
                <img src="image/no-photo.png" class="img-circle" alt="User Image">

                <p style="font-size: 18px;">
                    admin                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body" style="display:none">
                <div class="col-xs-6 no-padding">
		    <a class="btn btn-default btn-flat" href="Rebate Status.htm" style="font-size:13px">View Profile</a>                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
		    <a class="btn btn-default btn-flat" href="Change User Passwordd.htm" style="font-size:12px">Change Password</a>                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="Edusec_login.html" data-method="post" style="font-size:12px">Sign out</a>                </div>
            </li>
        </ul>
    </li><!-- User Account: style can be found in dropdown.less -->

</ul>
</div>
</nav>
</header>

      <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="image/no-photo.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> Welcome, admin</p>
                </div>
            </div>
        
        <!-- sidebar-menu. -- Start -->

        <ul class="sidebar-menu">
            <li>
                <a href="Admin Dashboard.htm" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
	<li class="treeview active">
	<a href="Mess Module.htm"><i class="fa fa-dashboard"></i> <span>Mess</span> <i class="fa fa-angle-left pull-right"></i></a>        <ul class="treeview-menu">
	         
	        </ul>
</li>
        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="Admin Dashboard.htm"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="Dashboard">Mess</a></li>
<li class="active">Request Status</li>
</ul>

   <section class="content">
 <!--       <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> Request of status</h3></div>
  <div class="col-xs-4"></div>
 <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
        <a class="btn btn-block btn-success" href="http://localhost:8081/CMS/index.php?r=dashboard%2Fmsg-of-day%2Fcreate">ADD</a>	</div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-warning" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-to-pdf&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">PDF</a>	</div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-primary" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">EXCEL</a>	</div>
  </div>
</div>
-->



<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="msg-of-day-index">
	<div id="w0">	    <style>
.glyphicon-remove-circle {
  color : #C9302C;
}
.glyphicon-ok-circle {
  color : #449D44;
}
</style>
<div id="w1" class="grid-view">
<!--<table class="table   table-bordered"><thead>
-->
<form method="post" action="timetablesql2.php">
<table class="table   table-bordered">
<tr> <td > Indian Institute of Information Technology ,Vadodara</td></tr> 
<tr> <td >  Timetbale Semester -V</td></tr> 
<tr>

<?php
//code for time table goes here.

require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'TimeTable.xlsx';

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 



?>
<table class="table   table-bordered"><tr>
<th>Timings </th>
<th>Monday </th>
<th>Tuesday</th>
<th>WendesDay</th>
<th>Thursday</th>
<th>Friday</th>
</tr>

<tr>

<td>Timings </td>

<td>  
<table class="table   table-bordered">
<tr>
<td>Course</td>
<td>Faculty</td>
<td>Room No </td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td>Course</td>
<td>Faculty</td>
<td>Room No</td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td>Course</td>
<td>Faculty</td>
<td>Room No</td>
</tr>
</table>
</td>


<td>  
<table class="table   table-bordered">
<tr>
<td>Course</td>
<td>Faculty</td>
<td>Room No</td>
</tr>
</table>
</td>


<td>  
<table class="table   table-bordered">
<tr>
<td>Course</td>
<td>Faculty</td>
<td>Room No</td>
</tr>
</table>
</td>
</tr>
<!--  SL1 = Slot 1   -->
<tr>
<td ><input type="text" name="Sl1" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A5')->getValue(); ?>></td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text" name="MSl1" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B5')->getValue(); ?>></td>
<td><input type="text" name="MSl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C5')->getValue(); ?>></td>
<td ><input type-"text" name="MSl1R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('D5')->getValue(); ?> ></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr> 
<td><input type="text"  name="TSl1" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('E5')->getValue(); ?>></td>
<td><input type="text" name="TSl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('F5')->getValue(); ?>></td>
<td ><input type="text" name="TSl1R" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('G5')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>   
<td ><input type="text"  name="WSl1" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('H5')->getValue(); ?>></td>
<td ><input type="text" name="WSl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('I5')->getValue(); ?>></td>
<td ><input type="text" name="WSl1R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('J5')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td ><input type="text" name="ThSl1" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('K5')->getValue(); ?>></td>
<td><input type="text" name="ThSl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('L5')->getValue(); ?>></td>
<td><input type="text" name="ThSl1R" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('M5')->getValue(); ?> ></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text" name="FSl1" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('N5')->getValue(); ?>>
 </td>
<td><input type="text" name="FSl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('O5')->getValue(); ?>></td>
<td><input type="text" name="FSl1R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('P5')->getValue(); ?>></td>
</tr>
</table>
</td>
</tr>

<tr>
<td><input type="text" name="Sl2" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('A6')->getValue(); ?>></td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text" name="MSl2" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('B6')->getValue(); ?>></td>
<td><input type="text" name="MSl2F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C6')->getValue(); ?>></td>
<td><input type="text" name="MSl2R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('D6')->getValue(); ?> ></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr> 
<td><input type="text" name="TSl2" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('E6')->getValue(); ?>></td>
<td><input type="text" name="TSl2F" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('F6')->getValue(); ?>></td>
<td><input type="text"  name="TSl2R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('G6')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>   
<td><input type="text"  name="WSl2" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('H6')->getValue(); ?>></td>
<td><input type="text"  name="WSl2F" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('I6')->getValue(); ?>></td>
<td><input type="text"  name="WSl2R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('J6')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text"  name="ThSl2" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('K6')->getValue(); ?>></td>
<td><input type="text"  name="ThSl2F" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('L6')->getValue(); ?>></td>
<td><input type="text"  name="ThSl2R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('M6')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text"  name="FSl2" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('N6')->getValue(); ?>
 ></td>
<td><input type="text"  name="FSl2F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('O6')->getValue(); ?>></td>
<td><input type="text"  name="FSl2R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('P6')->getValue(); ?>></td>
</tr>
</table>
</td>
</tr>

<tr>
<td><input type="text"  name="Sl3" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('A7')->getValue(); ?>></td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text"  name="MSl3" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('B7')->getValue(); ?>></td>
<td><input type="text"  name="MSl3F" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('C7')->getValue(); ?>></td>
<td><input type="text"  name="MSl3R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('D7')->getValue(); ?>></td>
</tr>
</table>
</td >
<td>  
<table class="table   table-bordered">
<tr> 
<td><input type="text"  name="TSl3" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('E7')->getValue(); ?>></td>
<td><input type="text"  name="TSl3F" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('F7')->getValue(); ?>></td>
<td><input type="text"  name="TSl3R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('G7')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>   
<td><input type="text"  name="WSl3" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('H7')->getValue(); ?>></td>
<td><input type="text"  name="WSl3F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('I7')->getValue(); ?>></td>
<td><input type="text"  name="WSl3R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('J7')->getValue(); ?>> </td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text"  name="ThSl3" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('K7')->getValue(); ?>></td>
<td><input type="text"  name="ThSl3F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('L7')->getValue(); ?>></td>
<td><input type="text"  name="ThSl3R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('M7')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text"  name="FSl3" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('N7')->getValue(); ?>
 </td>
<td><input type="text"  name="FSl3F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('O7')->getValue(); ?>></td>
<td><input type="text"  name="FSl3R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('P7')->getValue(); ?>></td>
</tr>
</table>
</td>
</tr>

<tr>
<td><input type="text"  name="Sl4" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('A8')->getValue(); ?>></td>

<td>  
<table class="table   table-bordered">
<tr>
<td><input type="text"  name="MSl4" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('B8')->getValue(); ?>></td>
<td><input type="text"  name="MSl4F" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('C8')->getValue(); ?>></td>
<td><input type="text"  name="MSl4R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('D8')->getValue(); ?>></td>
</tr>
</table>
</td>
<td>  
<table class="table  table-bordered">
<tr> 
<td><input type="text"  name="TSl4" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('E8')->getValue(); ?>></td>
<td><input type="text"  name="TSl4F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('F8')->getValue(); ?>></td>
<td><input type="text"  name="TSl4R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('G8')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table  table-bordered">
<tr>   
<td><input type="text"  name="WSl4" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('H8')->getValue(); ?>></td>
<td><input type="text"  name="WSl4F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('I8')->getValue(); ?>></td>
<td><input type="text"  name="WSl4R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('J8')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table  table-bordered">
<tr>
<td><input type="text"  name="ThSl4" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('K8')->getValue(); ?>></td>
<td><input type="text"  name="ThSl4F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('L8')->getValue(); ?>></td>
<td><input type="text"  name="ThSl4R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('M8')->getValue(); ?>></td>
</tr>
</table>
</td>

<td>  
<table class="table  table-bordered">
<tr>
<td><input type="text"  name="FSl4" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('N8')->getValue(); ?>
 ></td>
<td><input type="text"  name="FSl4F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('O8')->getValue(); ?>></td>
<td><input type="text"  name="FSl4R" value=<?php  echo $objPHPExcel->getActiveSheet()->getCell('P8')->getValue(); ?>></td>
</tr>
</table>
</td>
</tr>



</table>
</tr> 

</table>
<input type="submit" class="btn btn-block btn-success" name="edit"  value="Edit" >
</form>
</div></div>	</div>
      </div>
   </div>
</div>
    </section>

    <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 3.0 -->
        </div>
        <strong>Copyright © 2015 <a >Team 3</a>.</strong> All rights reserved.
      </div>
    </footer>

</aside>


	
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$("a.toggle-column").on("click", function(e) {
    e.preventDefault();
    $.post($(this).attr("href"), function(data) {
        var pjaxId = $(e.target).closest(".grid-view").parent().attr("id");
        $.pjax.reload({container:"#" + pjaxId});
    });
    return false;
});
jQuery('#w1').yiiGridView({"filterUrl":"/CMS/index.php?r=dashboard%2Fmsg-of-day%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>
