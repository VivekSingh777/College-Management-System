        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="admin_acad_profile.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="admin_acad_dash.php">Academic</a></li>
<li class="active">Student Record</li>
</ul>

    <section class="content">
        

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form id="stu-master-form" action="admin.php" method="post" onsubmit="return false;">
<input type="hidden" name="_csrf" value="NHBnY0dyWktnPD8oLyEJHQxdBCkjNmonZ0hXAHEzKxplIg0GMUEbBQ==">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Add Student</h4>

      </div>
      <div class="container"><br>
<div class="row">
  <div class="span4"></div>
  <div class="span4"><!--span id="results">Team3</span-->
  <!-- A button for taking snaps -->

<img id="profile_pic" class="center-block img-thumbnail" src="img/default_pic.png" width="125" height="125"><br></div>
  <div class="span4">
    <a href='#' data-toggle='modal' data-target='#snapshot_window'><input type=button class="btn btn-success center-block" value="Change Picture"></a>
  </div>
</div></div>

    <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
		<div class="form-group field-stuinfo-stu_unique_id required">
<label class="control-label" for="stuinfo-stu_unique_id">Student ID</label><input type="text" id="sid" class="form-control" name="sid" value="16"><div class="help-block"></div>
</div>    </div> 

<div class="col-xs-12 col-sm-4 col-lg-4">
<div class="form-group field-stuinfo-stu_blood_group">
<label class="control-label" for="stuinfo-stu_blood_group">Category</label><select id="category" class="form-control" name="category">
<option value="">---Category---</option>
<option value="sc">SC</option>
<option value="st">ST</option>
<option value="obc">OBC</option>
<option value="gen">Others</option>
</select><div class="help-block"></div>
</div>   </div>
   </div>
   
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input type="text" id="first_name" class="form-control" name="first_name"><div class="help-block"></div>
</div>    </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input type="text" id="last_name" class="form-control" name="last_name"><div class="help-block"></div>
</div>    </div>
   </div>

  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Father Name</label><input type="text" id="father_name" class="form-control" name="father_name"><div class="help-block"></div>
</div>    </div>
   </div>

  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Mother Name</label><input type="text" id="mother_name" class="form-control" name="mother_name"><div class="help-block"></div>
</div>    </div>
   </div>

  <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label><select id="gender" class="form-control" name="gender">
<option value="">---Select Gender---</option>
<option value="m">Male</option>
<option value="f">Female</option>
</select><div class="help-block"></div>
</div>    </div>


   
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mobile No</label><input type="number" id="s_mob_no" class="form-control" name="s_mob_no" maxlength="12"><div class="help-block"></div>
</div>    </div>
</div>   

    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_guardian_email">
<label class="control-label" for="stuinfo-stu_guardian_email">Guardian Email</label><input type="text" id="guardian_email" class="form-control" name="guardian_email" maxlength="60"><div class="help-block"></div>
</div> 
   </div>
 
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_guardian_mob_no">
<label class="control-label" for="stuinfo-stu_guardian_mob_no">Guardian Mobile No</label><input type="number" id="guardian_mob_no" class="form-control" name="guardian_mob_no" maxlength="12"><div class="help-block"></div>
  </div> </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Birth Date</label><input type="date" id="dob" class="form-control" name="dob" placeholder="yyyy-mm-dd">
<div class="help-block"></div>
</div>		
	</div> 

 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_address required">
<label class="control-label" for="stuinfo-stu_address">Address</label><input type="address" id="address" class="form-control" name="address"><div class="help-block"></div>
</div>    
</div>
   </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_city required">
<label class="control-label" for="stuinfo-stu_city">City</label><input type="text" id="city" class="form-control" name="city"><div class="help-block"></div>
</div>    </div>
   
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_pin_code required">
<label class="control-label" for="stuinfo-stu_pin_code">Pin Code</label><input type="number" id="pin_code" class="form-control" name="pin_code"><div class="help-block"></div>
</div>    </div>


<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">

<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_state required">
<label class="control-label" for="stuinfo-stu_state">State</label><input type="text" id="state" class="form-control" name="state"><div class="help-block"></div>
</div>    </div>

<div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-stuinfo-stu_blood_group">
<label class="control-label" for="stuinfo-stu_blood_group">Blood Group</label><select id="blood_group" class="form-control" name="blood_group">
<option value="">---Blood Group---</option>
<option value="ABN">AB-</option>
<option value="ABP">AB+</option>
<option value="AN">A-</option>
<option value="AP">A+</option>
<option value="BN">B-</option>
<option value="BP">B+</option>
<option value="ON">O-</option>
<option value="OP">O+</option>


</select><div class="help-block"></div>
</div>
   </div>

<div class="box box-solid box-warning col-xs-12 col-lg-12 no-padding">
  <div class="box-header with-border">
    <h4 class="box-title"><i class="fa fa-info-circle"></i> Academic Details</h4>
   </div>
  
  <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_jee_rank required">
<label class="control-label" for="stuinfo-stu_jee_rank">Jee  Rank</label><input type="text" id="jee_rank" class="form-control" name="jee_rank"><div class="help-block"></div>
</div>    </div>
   
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_jee_roll_no required">
<label class="control-label" for="stuinfo-stu_jee_roll_no">Jee Main Roll No</label><input type="number" id="jee_roll_no" class="form-control" name="jee_roll_no"><div class="help-block"></div>
</div>    </div>
   
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_board required">
<label class="control-label" for="stuinfo-stu_board">Board</label><input type="text" id="board" class="form-control" name="board"><div class="help-block"></div>
</div>    </div>
  <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_branch">
<label class="control-label" for="stuinfo-stu_branch">Branch</label><select id="branch" class="form-control" name="branch">
<option value="">---Branch---</option>
<option value="it">IT</option>
<option value="cse">CSE</option>
</select><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_batch required">
<label class="control-label" for="stuinfo-stu_batch">Batch</label><input type="text" id="batch" class="form-control" name="batch"><div class="help-block"></div>
</div>    </div>
 
</div>

 <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_branch">
<label class="control-label" for="stuinfo-stu_branch">Medical Certificate</label><select id="mc" class="form-control" name="mc">
<option value="">---Status---</option>
<option value="1">Submitted</option>
<option value="0">Pending</option>
</select><div class="help-block"></div>
</div>    </div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_branch">
<label class="control-label" for="stuinfo-stu_branch">Anti Rag Affidavit</label><select id="arc" class="form-control" name="arc">
<option value="">---Status---</option>
<option value="1">Submitted</option>
<option value="0">Pending</option>
</select><div class="help-block"></div>
</div>    </div>
 
</div>

    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <input type="button" class="btn btn-block btn-success" value="Create" onclick="checkOnStudentAdd();"></div>
	<div class="col-xs-6">
	    <a class="btn btn-default btn-block" href="admin.php">Cancel</a>	</div>
    </div>

    </form>   </div>
  </div>
</div>
</div>
    </section>

    <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <strong>Copyright &copy; 2015 <a>Team 3</a>.</strong> All rights reserved.
      </div>
    </footer>

</aside>


	
      </div>


      <!-- modal for taking pictures -->

<div class="modal fade" id="snapshot_window" role="dialog">
            <div class="modal-dialog">
                <!--Modal Content-->
                <div class="container-fluid form-container modal-content">
                    <!--            Modal Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 class="modal-title">Take a snapshot</h1>
                    </div>
                      <div id="my_camera"></div>
  <!-- A button for taking snaps -->
  <form>
    <input type=button class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()">
  </form>
              </div>
              </div>
              </div>




    <script src="js/yii.validation.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/yii.activeForm.js"></script>
<script src="js/home_js.js"></script>
<script src="js/webcam.js" type="text/javascript"></script>
<script language="JavaScript">
    Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
    });
    Webcam.attach( '#my_camera' );
    function take_snapshot() {
      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('profile_pic').src = data_uri;
        
        Webcam.upload( data_uri, 'php_includes/image_upload.php', function(code, text) {
                                            });

        //alert("dd : " + data_uri);

      } );
    }
  </script>

<!--script type="text/javascript">jQuery(document).ready(function () {
jQuery('#stuinfo-stu_dob').datepicker({"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2016","changeYear":true,"readOnly":true,"autoSize":true});
jQuery('#stuinfo-stu_admission_date').datepicker({"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2016","changeYear":true,"readOnly":true,"autoSize":true,"buttonImage":"/readyMadeCode/eduSec/index.phpimages/calendar.png"});
jQuery('#stu-master-form').yiiActiveForm([{"id":"stuinfo-stu_unique_id","name":"stu_unique_id","container":".field-stuinfo-stu_unique_id","input":"#stuinfo-stu_unique_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student ID must be an integer.","skipOnEmpty":1});}},{"id":"stuinfo-stu_title","name":"stu_title","container":".field-stuinfo-stu_title","input":"#stuinfo-stu_title","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Title must be a string.","max":5,"tooLong":"Title should contain at most 5 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_first_name","name":"stu_first_name","container":".field-stuinfo-stu_first_name","input":"#stuinfo-stu_first_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"First Name must be a string.","max":50,"tooLong":"First Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_middle_name","name":"stu_middle_name","container":".field-stuinfo-stu_middle_name","input":"#stuinfo-stu_middle_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Middle Name must be a string.","max":50,"tooLong":"Middle Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_last_name","name":"stu_last_name","container":".field-stuinfo-stu_last_name","input":"#stuinfo-stu_last_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Last Name must be a string.","max":50,"tooLong":"Last Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_gender","name":"stu_gender","container":".field-stuinfo-stu_gender","input":"#stuinfo-stu_gender","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Gender must be a string.","max":10,"tooLong":"Gender should contain at most 10 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_email_id","name":"stu_email_id","container":".field-stuinfo-stu_email_id","input":"#stuinfo-stu_email_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":50,"tooLong":"Email ID should contain at most 50 characters.","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":65,"tooLong":"Email ID should contain at most 65 characters.","skipOnEmpty":1});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email ID is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}},{"id":"stuinfo-stu_mobile_no","name":"stu_mobile_no","container":".field-stuinfo-stu_mobile_no","input":"#stuinfo-stu_mobile_no","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","skipOnEmpty":1});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","min":10,"tooSmall":"Mobile No must be no less than 10.","skipOnEmpty":1});}},{"id":"stuinfo-stu_dob","name":"stu_dob","container":".field-stuinfo-stu_dob","input":"#stuinfo-stu_dob","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});}},{"id":"stumaster-stu_master_category_id","name":"stu_master_category_id","container":".field-stumaster-stu_master_category_id","input":"#stumaster-stu_master_category_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_nationality_id","name":"stu_master_nationality_id","container":".field-stumaster-stu_master_nationality_id","input":"#stumaster-stu_master_nationality_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_course_id","name":"stu_master_course_id","container":".field-stumaster-stu_master_course_id","input":"#stumaster-stu_master_course_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_batch_id","name":"stu_master_batch_id","container":".field-stumaster-stu_master_batch_id","input":"#stumaster-stu_master_batch_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_section_id","name":"stu_master_section_id","container":".field-stumaster-stu_master_section_id","input":"#stumaster-stu_master_section_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stuinfo-stu_admission_date","name":"stu_admission_date","container":".field-stuinfo-stu_admission_date","input":"#stuinfo-stu_admission_date","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Admission Date must be a string.","max":15,"tooLong":"Admission Date should contain at most 15 characters.","skipOnEmpty":1});}},{"id":"stumaster-stu_master_stu_status_id","name":"stu_master_stu_status_id","container":".field-stumaster-stu_master_stu_status_id","input":"#stumaster-stu_master_stu_status_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}}], []);
});</script-->


</body>
</html>