<?php 
include_once("php_includes/common_frame_a.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_admin_column.php");

$id = $_GET['id'];
?>
<?php 
$semester = $_GET['sem_id'];
?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Student Result</li>
</ul>

    <section style="min-height: 559px;" class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-select"></i>Student Result</h3></div>
</div>

<div class="stu-master-create">
    <style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>



<script>
$(function () {
  $('[data-toggle="popover"]').popover({placement: function() { return $(window).width() < 768 ? 'bottom' : 'right'; }})
})
</script>

<?php
  
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("cms",$conn);
  $url="";
  $sem_word="";
?> 

<!-- SQL query goes here -->
<?php 
$strSQL = "SELECT sid, firstname, lastname, sem_id, branch, credit_earned/total_credit as spi
            FROM
        (SELECT sid, firstname, lastname, sem_id, branch, sum(Product) as credit_earned, sum(course_credit) as total_credit
         FROM
            (SELECT *, course_credit*grade as Product FROM
                (SELECT * FROM
                (SELECT * FROM
            (SELECT * FROM
            (SELECT sem_id, course_id FROM semester_courses WHERE sem_id = '$semester') as A
                      NATURAL JOIN 
                      (SELECT sid, course_id, fid, gid FROM student_course_faculty_grade WHERE sid = '$id') as B) as C
                      NATURAL JOIN course) as D
                      NATURAL JOIN grade) as F
                      NATURAL JOIN (SELECT sid, firstname, lastname, branch FROM student WHERE sid='$id') as G) as H) as I";
  $rs = mysql_query($strSQL);
 $counter=1; 
 while($row = mysql_fetch_array($rs)) {
  $id = $row['sid'];
  $fname = $row['firstname'];
  $lname = $row['lastname'];
  $sem = $row['sem_id'];
  $branch = $row['branch'];
  $spi = $row['spi'];?>
  <?php
}
?>

<?php 
$strSQL3 = "SELECT earned_credit/total_credit as cpi
            FROM
            (SELECT sum(course_credit) as total_credit, sum(Product) as earned_credit
            FROM
            (SELECT *, course_credit*grade as Product FROM
            (SELECT * FROM
            (SELECT * FROM
            (SELECT * FROM
            (SELECT sem_id, course_id FROM semester_courses WHERE sem_id <= '$semester') as A
            NATURAL JOIN 
            (SELECT sid, course_id, fid, gid FROM student_course_faculty_grade WHERE sid = '$id') as B) as C
            NATURAL JOIN course) as D
            NATURAL JOIN grade) as F) as G) as H";
    $rs3 = mysql_query($strSQL3);
    $counter=1; 
 while($row = mysql_fetch_array($rs3)) {
  $cpi = $row['cpi'];?>
<?php }
?>

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    
    <form id="stu-master-form" method="GET">
<input name="_csrf" value="ZElBdlJERGoXGwcfCiUPJFACLBIrFXMtEh4xFRFzcwFJfQI/Cz0VJg==" type="hidden">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Result</h4>
      </div>
    <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
		<div class="form-group field-stuinfo-stu_unique_id">
<label class="control-label" for="stuinfo-stu_unique_id">Student ID</label><input id="sid" class="form-control" name="s_id" type="text" value="<?php echo $id; ?>" readonly><div class="help-block"></div>
</div>    </div>
</div>
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_first_name">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input id="fname" class="form-control" name="first_name" value="<?php echo $fname; ?>" type="text"readonly><div class="help-block"></div>
</div>    </div>

    
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input id="lname" class="form-control" name="last_name" value="<?php echo $lname; ?>" type="text"readonly><div class="help-block"></div>
</div>    </div></div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Semester</label><input id="sem" class="form-control" name="semester" value="<?php echo $semester; ?>" type="text"readonly><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Branch</label><input id="branch" class="form-control" name="branch" value="<?php echo $branch; ?>" type="text"readonly><div class="help-block"></div>
</div>    </div>
   </div>
</div>
<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
    <div class="stu-master-index">
        <div id="w0">       <div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th>Course ID</th><th>Course Name</th><th>Grade</th></tr>

</thead>
 
<tbody>
<!--  phpcontent -->
<?php 
$strSQL2 = "SELECT * FROM
          (SELECT * FROM
            (SELECT * FROM
            (SELECT sem_id, course_id FROM semester_courses WHERE sem_id = '$semester') as A
            NATURAL JOIN 
            (SELECT sid, course_id, fid, gid FROM student_course_faculty_grade WHERE sid = '$id') as B) as C
            NATURAL JOIN course) as D";
  $rs2 = mysql_query($strSQL2);
 $counter=1; 
 while($row = mysql_fetch_array($rs2)) {
  $courseid = $row['course_id'];
  $coursename = $row['course_name'];
  $gradeid = $row['gid'];
  ?>
  <tr id="w1-filters" class="filters">
    <td> <?php  echo $counter++;   ?></td>
    <td><?php echo $courseid ?></td><td><?php  echo $coursename ?></td><td> <?php  echo $gradeid ?></td>
</tr>
<?php }
?>

</tbody>
</table>
</div>  </div>      </div>
      </div>
    </div>
    
<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">SPI</label><input id="spi" class="form-control" name="spi" value="<?php echo $spi; ?>"type="text"readonly><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">CPI</label><input id="cpi" class="form-control" name="cpi" type="text" value="<?php echo $cpi; ?>"readonly><div class="help-block"></div>
</div>    </div>
</div>
</div>

 

  </div>

<div class="box box-solid box-warning col-xs-12 col-lg-12 no-padding">
  <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <input type="hidden" class="btn btn-block btn-success" value="Print Result"  onclick="goto();"></div>
    </div>

    </form>   </div>
  </div>
</div>
</div>
    </section>

    
<?php

include_once("php_includes/footer.php");

 ?>

</aside>


	
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/yii.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#stuinfo-stu_dob').datepicker({"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2016","changeYear":true,"readOnly":true,"autoSize":true});
jQuery('#stuinfo-stu_admission_date').datepicker({"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2016","changeYear":true,"readOnly":true,"autoSize":true,"buttonImage":"/edusec/index.phpimages/calendar.png"});
jQuery('#stu-master-form').yiiActiveForm([{"id":"stuinfo-stu_unique_id","name":"stu_unique_id","container":".field-stuinfo-stu_unique_id","input":"#stuinfo-stu_unique_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student ID must be an integer.","skipOnEmpty":1});}},{"id":"stuinfo-stu_title","name":"stu_title","container":".field-stuinfo-stu_title","input":"#stuinfo-stu_title","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Title must be a string.","max":5,"tooLong":"Title should contain at most 5 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_first_name","name":"stu_first_name","container":".field-stuinfo-stu_first_name","input":"#stuinfo-stu_first_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"First Name must be a string.","max":50,"tooLong":"First Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_middle_name","name":"stu_middle_name","container":".field-stuinfo-stu_middle_name","input":"#stuinfo-stu_middle_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Middle Name must be a string.","max":50,"tooLong":"Middle Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_last_name","name":"stu_last_name","container":".field-stuinfo-stu_last_name","input":"#stuinfo-stu_last_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Last Name must be a string.","max":50,"tooLong":"Last Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_gender","name":"stu_gender","container":".field-stuinfo-stu_gender","input":"#stuinfo-stu_gender","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Gender must be a string.","max":10,"tooLong":"Gender should contain at most 10 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_email_id","name":"stu_email_id","container":".field-stuinfo-stu_email_id","input":"#stuinfo-stu_email_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":50,"tooLong":"Email ID should contain at most 50 characters.","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":65,"tooLong":"Email ID should contain at most 65 characters.","skipOnEmpty":1});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email ID is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}},{"id":"stuinfo-stu_mobile_no","name":"stu_mobile_no","container":".field-stuinfo-stu_mobile_no","input":"#stuinfo-stu_mobile_no","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","skipOnEmpty":1});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","min":10,"tooSmall":"Mobile No must be no less than 10.","skipOnEmpty":1});}},{"id":"stuinfo-stu_dob","name":"stu_dob","container":".field-stuinfo-stu_dob","input":"#stuinfo-stu_dob","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});}},{"id":"stumaster-stu_master_category_id","name":"stu_master_category_id","container":".field-stumaster-stu_master_category_id","input":"#stumaster-stu_master_category_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_nationality_id","name":"stu_master_nationality_id","container":".field-stumaster-stu_master_nationality_id","input":"#stumaster-stu_master_nationality_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_course_id","name":"stu_master_course_id","container":".field-stumaster-stu_master_course_id","input":"#stumaster-stu_master_course_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_batch_id","name":"stu_master_batch_id","container":".field-stumaster-stu_master_batch_id","input":"#stumaster-stu_master_batch_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_section_id","name":"stu_master_section_id","container":".field-stumaster-stu_master_section_id","input":"#stumaster-stu_master_section_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stuinfo-stu_admission_date","name":"stu_admission_date","container":".field-stuinfo-stu_admission_date","input":"#stuinfo-stu_admission_date","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Admission Date must be a string.","max":15,"tooLong":"Admission Date should contain at most 15 characters.","skipOnEmpty":1});}},{"id":"stumaster-stu_master_stu_status_id","name":"stu_master_stu_status_id","container":".field-stumaster-stu_master_stu_status_id","input":"#stumaster-stu_master_stu_status_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}}], []);
});</script>    
    
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>
