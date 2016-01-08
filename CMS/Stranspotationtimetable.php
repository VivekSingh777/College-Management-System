<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");


 ?>

        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">All TimeTable</a></li>
<li class="active">Transpotation TimeTable</li>
</ul>

   <section class="content">
 <!--       <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> Request of status</h3></div>
  <div class="col-xs-4"></div>
 <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
    <div class="col-xs-4 left-padding">
        <a class="btn btn-block btn-success" href="http://localhost:8081/CMS/index.php?r=dashboard%2Fmsg-of-day%2Fcreate">ADD</a>   </div>
    <div class="col-xs-4 left-padding">
    <a class="btn btn-block btn-warning" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-to-pdf&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">PDF</a> </div>
    <div class="col-xs-4 left-padding">
    <a class="btn btn-block btn-primary" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">EXCEL</a>    </div>
  </div>
</div>
-->



<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
    <div class="msg-of-day-index">
    <div id="w0">       <style>
.glyphicon-remove-circle {
  color : #C9302C;
}
.glyphicon-ok-circle {
  color : #449D44;
}
</style>
<div id="w1" class="grid-view">
<!--<table class="table   table-bordered"><thead>
-->courier0003
<!--TranspotaionTimeTableSql-->
<form method="post" action="TranspotaionTimeTableSql.php">
<div class="text-center" class="img-left">
    <img src="image/iiit_img.png" alien="right" hight="80" width="80">
   <font size="6"><b >Indian Institute of Information Technology, Vadodara </font>
    <br>Bldg No. 9, IC Department, Government Engineering College, Sector 28, 
    <br>Gandhinagar, Gujarat, India - Contact No. +91-79-23215051</b>

     <br>
    <br>
    <br>

    <b>Bus Transportation Schedule</b> </div>

<table class="table   table-bordered">
<tr> 
<?php
//code for time table goes here.

require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'TranspotaionTimeTable.xlsx';

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


    <th>Timing</th>    <th>Bus</th>
    <th>From</th>
    <th>To</th>
</tr>
<tr>

    <th name="Sl1"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A5')->getValue(); ?></th>
    <th name="Sl1B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B5')->getValue(); ?></th>
     <th name="Sl1F"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('C5')->getValue(); ?></th> 
     <th name="Sl1D"> <?php  echo $objPHPExcel->getActiveSheet()->getCell('D5')->getValue(); ?></th>
 </tr>
 
<tr>
    <th name="Sl2"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A6')->getValue(); ?></th>
    <th name="Sl2B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B6')->getValue(); ?></th>
    <th name="Sl2F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C6')->getValue(); ?></th>
    <th name="Sl2D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D6')->getValue(); ?></th>
</tr>

<tr>
    <th name="Sl3"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A7')->getValue(); ?></th>
    <th name="Sl3B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B7')->getValue(); ?> </th>
    <th name="Sl3F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C7')->getValue(); ?> </th>
    <th name="Sl3D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D7')->getValue(); ?> </th>
    
    </tr>
    
<tr>
    <th name="Sl4"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A8')->getValue(); ?></th>
    <th name="Sl4B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B8')->getValue(); ?> </th>
    <th name="Sl4F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C8')->getValue(); ?> </th>
    <th name="Sl4D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D8')->getValue(); ?> </th>
    
    </tr>
    <tr>
    <th name="Sl5"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A9')->getValue(); ?></th>
    <th name="Sl5B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B9')->getValue(); ?> </th>
    <th name="Sl5F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C9')->getValue(); ?> </th>
    <th name="Sl5D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D9')->getValue(); ?> </th>
    
    </tr>
<tr>
    <th name="Sl6"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A10')->getValue(); ?></th>
    <th name="Sl6B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B10')->getValue(); ?> </th>
    <th name="Sl6F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C10')->getValue(); ?> </th>
    <th name="Sl6D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D10')->getValue(); ?> </th>
    
    </tr>
<tr>
    </tr>
<tr>
    </tr>

    <tr>
    <th name="Sl7"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A11')->getValue(); ?></th>
    <th name="Sl7B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B11')->getValue(); ?> </th>
    <th name="Sl7F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C11')->getValue(); ?> </th>
    <th name="Sl7D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D11')->getValue(); ?> </th>
    
    </tr>
    <tr>
    <th name="Sl8"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A12')->getValue(); ?></th>
    <th name="Sl8B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B12')->getValue(); ?> </th>
    <th name="Sl8F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C12')->getValue(); ?> </th>
    <th name="Sl8D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D12')->getValue(); ?> </th>
    
    </tr>
    <tr>
    <th name="Sl9"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A13')->getValue(); ?></th>
    <th name="Sl9B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B13')->getValue(); ?> </th>
    <th name="Sl9F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C13')->getValue(); ?> </th>
    <th name="Sl9D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D13')->getValue(); ?> </th>
    
    </tr>  
    <tr>
    <th name="S20"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A14')->getValue(); ?></th>
    <th name="S20B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B14')->getValue(); ?> </th>
    <th name="S20F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C14')->getValue(); ?> </th>
    <th name="S20D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D14')->getValue(); ?> </th>
    
    </tr> 
      <tr>
    <th name="S21"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A15')->getValue(); ?></th>
    <th name="S21B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B15')->getValue(); ?> </th>
    <th name="S21F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C15')->getValue(); ?> </th>
    <th name="S21D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D15')->getValue(); ?> </th>
    
    </tr>
    <tr>
    <th name="S22"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A16')->getValue(); ?></th>
    <th name="S22B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B16')->getValue(); ?> </th>
    <th name="S22F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C16')->getValue(); ?> </th>
    <th name="S22D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D16')->getValue(); ?> </th>
    
    </tr>
   
    <tr>
    <th name="S23"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A17')->getValue(); ?></th>
    <th name="S23B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B17')->getValue(); ?> </th>
    <th name="S23F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C17')->getValue(); ?> </th>
    <th name="S23D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D17')->getValue(); ?> </th>
    
    </tr>
    
    <tr>
    <th name="S24"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A18')->getValue(); ?></th>
    <th name="S24B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B18')->getValue(); ?> </th>
    <th name="S24F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C18')->getValue(); ?> </th>
    <th name="S24D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D18')->getValue(); ?> </th>
    
    </tr>
    
    <tr>
    <th name="S25"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A19')->getValue(); ?></th>
    <th name="S25B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B19')->getValue(); ?> </th>
    <th name="S25F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C19')->getValue(); ?> </th>
    <th name="S25D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D19')->getValue(); ?> </th>
    
    </tr>   
    <tr>
    <th name="S26"><?php  echo $objPHPExcel->getActiveSheet()->getCell('A20')->getValue(); ?></th>
    <th name="S26B"><?php  echo $objPHPExcel->getActiveSheet()->getCell('B20')->getValue(); ?> </th>
    <th name="S26F"><?php  echo $objPHPExcel->getActiveSheet()->getCell('C20')->getValue(); ?> </th>
    <th name="S26D"><?php  echo $objPHPExcel->getActiveSheet()->getCell('D20')->getValue(); ?> </th>
    
    </tr>
     

</table>
</form>
</div></div>    </div>
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
