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
<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");


 ?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>

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
