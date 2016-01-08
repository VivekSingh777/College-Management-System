<?php


include_once("php_includes/check_login_status.php");


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
        <title>Timetable</title>
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
            <span><?php echo $_SESSION['userid'] ?><i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu" style="margin-right:10px">
            <!-- User image -->
            <li class="user-header bg-light-blue">
                <img src="image/no-photo.png" class="img-circle" alt="User Image">

                <p style="font-size: 18px;">
            <?php echo $_SESSION['userid'] ?>                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body" style="display:none">
                <div class="col-xs-6 no-padding">
		    <a class="btn btn-default btn-flat" href="Rebate Status.htm" style="font-size:13px">View Profile</a>                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
		    <a class="btn btn-default btn-flat" href="changePassword.php" style="font-size:12px">Change Password</a>                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="logout.php" data-method="post" style="font-size:12px">Sign out</a>                </div>
            </li>
        </ul>
    </li><!-- User Account: style can be found in dropdown.less -->

</ul>
</div>
</nav>
</header>

          
	
        

    <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>


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
<form method="post" action="timetablesql.php">
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
<td name="Sl1"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A5')->getValue(); ?></td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="MSl1"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B5')->getValue(); ?></td>
<td name="MSl1F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('C5')->getValue(); ?></td>
<td name="MSl1R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D5')->getValue(); ?> </td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr> 
<td name="TSl1"><?php  echo $objPHPExcel->getActiveSheet()->getCell('E5')->getValue(); ?></td>
<td name="TSl1F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('F5')->getValue(); ?></td>
<td name="TSl1R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('G5')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>   
<td name="WSl1"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('H5')->getValue(); ?></td>
<td name="WSl1F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('I5')->getValue(); ?></td>
<td name="WSl1R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('J5')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="ThSl1"><?php  echo $objPHPExcel->getActiveSheet()->getCell('K5')->getValue(); ?></td>
<td name="ThSl1F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('L5')->getValue(); ?></td>
<td name="ThSl1R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('M5')->getValue(); ?> </td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="FSl1"><?php  echo $objPHPExcel->getActiveSheet()->getCell('N5')->getValue(); ?>
 </td>
<td name="FSl1F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('O5')->getValue(); ?></td>
<td name="FSl1R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('P5')->getValue(); ?></td>
</tr>
</table>
</td>
</tr>

<tr>
<td name="Sl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A6')->getValue(); ?></td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="MSl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B6')->getValue(); ?></td>
<td name="MSl2F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('C6')->getValue(); ?></td>
<td name="MSl2R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D6')->getValue(); ?> </td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr> 
<td name="TSl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('E6')->getValue(); ?></td>
<td name="TSl2F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('F6')->getValue(); ?></td>
<td name="TSl2R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('G6')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>   
<td name="WSl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('H6')->getValue(); ?></td>
<td name="WSl2F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('I6')->getValue(); ?></td>
<td name="WSl2R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('J6')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="ThSl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('K6')->getValue(); ?></td>
<td name="ThSl2F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('L6')->getValue(); ?></td>
<td name="ThSl2R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('M6')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="FSl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('N6')->getValue(); ?>
 </td>
<td name="FSl2F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('O6')->getValue(); ?></td>
<td name="FSl2R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('P6')->getValue(); ?></td>
</tr>
</table>
</td>
</tr>

<tr>
<td name="Sl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A7')->getValue(); ?></td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="MSl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B7')->getValue(); ?></td>
<td name="MSl3F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('C7')->getValue(); ?></td>
<td name="MSl3R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D7')->getValue(); ?></td>
</tr>
</table>
</td >
<td>  
<table class="table   table-bordered">
<tr> 
<td name="TSl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('E7')->getValue(); ?></td>
<td name="TSl3F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('F7')->getValue(); ?></td>
<td name="TSl3R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('G7')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>   
<td name="WSl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('H7')->getValue(); ?></td>
<td name="WSl3F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('I7')->getValue(); ?></td>
<td name="WSl3R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('J7')->getValue(); ?> </td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="ThSl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('K7')->getValue(); ?></td>
<td name="ThSl3F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('L7')->getValue(); ?></td>
<td name="ThSl3R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('M7')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="FSl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('N7')->getValue(); ?>
 </td>
<td name="FSl3F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('O7')->getValue(); ?></td>
<td name="FSl3F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('P7')->getValue(); ?></td>
</tr>
</table>
</td>
</tr>

<tr>
<td name="Sl4"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A8')->getValue(); ?></td>

<td>  
<table class="table   table-bordered">
<tr>
<td name="MSl4"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B8')->getValue(); ?></td>
<td name="MSl4F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C8')->getValue(); ?></td>
<td name="MSl4R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D8')->getValue(); ?></td>
</tr>
</table>
</td>
<td>  
<table class="table  table-bordered">
<tr> 
<td name="TSl4"><?php  echo $objPHPExcel->getActiveSheet()->getCell('E8')->getValue(); ?></td>
<td name="TSl4F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('F8')->getValue(); ?></td>
<td name="TSl4R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('G8')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table  table-bordered">
<tr>   
<td name="WSl4"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('H8')->getValue(); ?></td>
<td name="WSl4F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('I8')->getValue(); ?></td>
<td name="WSl4R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('J8')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table  table-bordered">
<tr>
<td name="ThSl4"><?php  echo $objPHPExcel->getActiveSheet()->getCell('K8')->getValue(); ?></td>
<td name="ThSl4F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('L8')->getValue(); ?></td>
<td name="ThSl4R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('M8')->getValue(); ?></td>
</tr>
</table>
</td>

<td>  
<table class="table  table-bordered">
<tr>
<td name="FSl4"><?php  echo $objPHPExcel->getActiveSheet()->getCell('N8')->getValue(); ?>
 </td>
<td name="FSl4F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('O8')->getValue(); ?></td>
<td name="FSl4R"><?php  echo $objPHPExcel->getActiveSheet()->getCell('P8')->getValue(); ?></td>
</tr>
</table>
</td>
</tr>



</table>
</tr> 

</table>
</form >
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
