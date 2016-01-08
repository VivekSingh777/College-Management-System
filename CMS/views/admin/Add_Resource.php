<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="?controller=admin&action=hostel_module">Hostel Module</a></li>
<li><a href="?controller=admin&action=roomwise_student_details">Resource Distribution Detail</a></li>
<li class="active">Add Resource</li>
</ul>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> Add Resource</h3></div>
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

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form  action="query/Resource_Detail.php" method="get">
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Add Resource Details</h4>
      </div>
    <div class="box-body">

   
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name" required>Resource ID</label><input type="text" id="stuinfo-stu_first_name" name="resource_id" class="form-control" required ><div class="help-block"></div>
</div>    </div>


 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Resource Name</label><input type="text" name="resource_name" required class="form-control" >
</div>
</div>


   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name" required>Purchase Date</label><input type="date"  name="purchase_date" class="form-control" required ><div class="help-block"></div>
</div>    </div>


   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name" required>Warranty Period</label><input type="text" id="stuinfo-stu_first_name" name="warranty_period" class="form-control" required ><div class="help-block"></div>
</div>    </div>


<div class="help-block"></div>
</div>    
  </div> 

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_city required">
<label class="control-label" for="stuinfo-stu_city">Count</label><input type="number"  name ="count" required class="form-control" ><div class="help-block">
</div>
</div>    
</div>
  
<script>
function hello(){

  alert('Submitted');
}

</script>
    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
  <div class="col-xs-6">
        <!--button type="submit"  class="btn btn-block btn-success" onclick="hello()" >ADD</button> </div-->
        <input type="submit"  class="btn btn-block btn-success" value="ADD"> </div>
 
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
    <script src="js/yii.validation.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#stuinfo-stu_dob').datepicker({"dateFormat":"YY-MM-DD","changeMonth":true,"yearRange":"1900:2016","changeYear":true,"readOnly":true,"autoSize":true});
jQuery('#stuinfo-stu_admission_date').datepicker({"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2016","changeYear":true,"readOnly":true,"autoSize":true,"buttonImage":"/readyMadeCode/eduSec/index.phpimages/calendar.png"});
jQuery('#stu-master-form').yiiActiveForm([{"id":"stuinfo-stu_unique_id","name":"stu_unique_id","container":".field-stuinfo-stu_unique_id","input":"#stuinfo-stu_unique_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student ID must be an integer.","skipOnEmpty":1});}},{"id":"stuinfo-stu_title","name":"stu_title","container":".field-stuinfo-stu_title","input":"#stuinfo-stu_title","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Title must be a string.","max":5,"tooLong":"Title should contain at most 5 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_first_name","name":"stu_first_name","container":".field-stuinfo-stu_first_name","input":"#stuinfo-stu_first_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"First Name must be a string.","max":50,"tooLong":"First Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_middle_name","name":"stu_middle_name","container":".field-stuinfo-stu_middle_name","input":"#stuinfo-stu_middle_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Middle Name must be a string.","max":50,"tooLong":"Middle Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_last_name","name":"stu_last_name","container":".field-stuinfo-stu_last_name","input":"#stuinfo-stu_last_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Last Name must be a string.","max":50,"tooLong":"Last Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_gender","name":"stu_gender","container":".field-stuinfo-stu_gender","input":"#stuinfo-stu_gender","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Gender must be a string.","max":10,"tooLong":"Gender should contain at most 10 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_email_id","name":"stu_email_id","container":".field-stuinfo-stu_email_id","input":"#stuinfo-stu_email_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":50,"tooLong":"Email ID should contain at most 50 characters.","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":65,"tooLong":"Email ID should contain at most 65 characters.","skipOnEmpty":1});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email ID is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}},{"id":"stuinfo-stu_mobile_no","name":"stu_mobile_no","container":".field-stuinfo-stu_mobile_no","input":"#stuinfo-stu_mobile_no","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","skipOnEmpty":1});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","min":10,"tooSmall":"Mobile No must be no less than 10.","skipOnEmpty":1});}},{"id":"stuinfo-stu_dob","name":"stu_dob","container":".field-stuinfo-stu_dob","input":"#stuinfo-stu_dob","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});}},{"id":"stumaster-stu_master_category_id","name":"stu_master_category_id","container":".field-stumaster-stu_master_category_id","input":"#stumaster-stu_master_category_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_nationality_id","name":"stu_master_nationality_id","container":".field-stumaster-stu_master_nationality_id","input":"#stumaster-stu_master_nationality_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_course_id","name":"stu_master_course_id","container":".field-stumaster-stu_master_course_id","input":"#stumaster-stu_master_course_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_batch_id","name":"stu_master_batch_id","container":".field-stumaster-stu_master_batch_id","input":"#stumaster-stu_master_batch_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_section_id","name":"stu_master_section_id","container":".field-stumaster-stu_master_section_id","input":"#stumaster-stu_master_section_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stuinfo-stu_admission_date","name":"stu_admission_date","container":".field-stuinfo-stu_admission_date","input":"#stuinfo-stu_admission_date","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Admission Date must be a string.","max":15,"tooLong":"Admission Date should contain at most 15 characters.","skipOnEmpty":1});}},{"id":"stumaster-stu_master_stu_status_id","name":"stu_master_stu_status_id","container":".field-stumaster-stu_master_stu_status_id","input":"#stumaster-stu_master_stu_status_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}}], []);
});</script>    </body>
    </html>
    
