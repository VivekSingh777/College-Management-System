<?php

$sid = $_GET['sid'];


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");

 ?> <style>

.box .box-solid {
     background-color: #F8F8F8;
}
</style>
<aside class="right-side">

        <ul class="breadcrumb">
<li class="active">Home</li>
</ul>

<!--connnecting to database -->
<?php

  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("cms",$conn);

?> 

<!-- SQL query goes here -->
<?php 
$strSQL = "SELECT sid, firstname, lastname, father_name, mother_name, gender, guardian_email, guardian_mob_no, s_mob_no, address, city, branch, batch, pin, state, blood_group, board, Password, jee_roll_no, jee_rank,status_ARA, status_MC FROM student WHERE sid = $sid";
  $rs = mysql_query($strSQL);

 while($row = mysql_fetch_array($rs)) {
  $id = $row['sid'];
  $name= $row['firstname'];
  $lastname=$row['lastname'];
  $fname= $row['father_name'];
  $mname= $row['mother_name'];
  $gen= $row['gender'];
  $gmail=  $row['guardian_email'];
  $smob= $row['s_mob_no'];
  $gmob= $row['guardian_mob_no'];
  $city= $row['city'];
  $branch=$row['branch'];
  $jeerollno= $row['jee_roll_no'];
  $jeerank= $row['jee_rank'];
  $board= $row['board'];
  $statusara= $row['status_ARA'];
  $statusmc= $row['status_MC'];
  $address=$row['address'];
  $Blood= $row['blood_group'];
  $state=$row['state'];
  $pin=$row['pin'];
  $batch=$row['batch'];
  $Password=$row['Password'];
}
?>

<script language="javascript">
function checkMobile(num)  
{  
  var mob = document.getElementById(num);
  var filter = /^\d{10}$/;  
  if(filter.test(num.value))  
        {  
      return true;
        }  
      else  
        {  
        alert("Please provide a valid mob no.");  
        document.getElementById(num).style.borderColor = "red";
        return false;  
        }  
}  
</script>

<!--Script for email validation -->
<script language="javascript">

function checkEmail() {

    var email = document.getElementById('gemail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    document.getElementById('gemail').style.borderColor = "red";
    return false;
 }
}
</script>

<!-- Validation of PIN-->
<script language="javascript">
function pinCheck()  
{  
  var pin1 = document.getElementById('pin');
  var filter = /^\d{6}$/;  
  if(filter.test(pin1.value))  
        {  
      return true;
        }  
      else  
        {  
        alert("Please provide a valid PIN no.");  
        document.getElementById('pin').style.borderColor = "red";
        return false;  
        }  
}  
</script>

<script type="text/javascript">

function gotoSaveStudent(){

var fn= document.getElementById("name").value;
var ln= document.getElementById("lname").value;
var gn= document.getElementById("gen").value;

var fan= document.getElementById("fname").value;
var mthr= document.getElementById("mname").value;
var smb= document.getElementById("smob").value;

var gmb= document.getElementById("gmob").value;
var gem= document.getElementById("gemail").value;
var adr= document.getElementById("addr").value;

var city= document.getElementById("city").value;
var sara= document.getElementById("statusara").value;
var smc= document.getElementById("statusmc").value;

var sjrn= document.getElementById("jeern").value;
var sjr= document.getElementById("jeerank").value;
var sbtch= document.getElementById("batch").value;

//var sbrch= document.getElementById("branch").value;
var state= document.getElementById("state").value;
var pin= document.getElementById("pin").value;

//var bg= document.getElementById("blood_group").value;
var password= document.getElementById("pwd").value;
var sid= document.getElementById("sid").value;

var board= document.getElementById("board").value;

var xhr;

xhr = new XMLHttpRequest();


xhr.onreadystatechange= function getInfo(){

if(xhr.readyState == 4 && xhr.status == 200){

  var response = parseInt(xhr.responseText);
  //alert("response : " + response + " " + xhr.responseText);
  if(response == 0){

    alert("Technical Error");
      //window.location = "Student_profile.php";

  }else if(response == 1){

      alert("Changes Saved");
      window.location = "admin_acad_showS.php?sid=" +sid;

  }

}

}; 

xhr.open("GET","editstudent.php?s_id=" + sid +"&first_name=" + fn +"&last_name=" + ln + "&father_name=" + fan + "&mother_name=" + mthr + "&gender=" + gn +"&guardian_email=" + gem + "&guardian_mobile_no=" + gmb + "&mobile_no=" + smb + "&city=" + city + "&batch=" + sbtch + "&address=" + adr + "&state=" + state+ "&pin=" + pin + "&password=" + password + "&jee_roll_no=" + sjrn + "&jee_rank=" + sjr + "&status_ARA=" + sara + "&status_MC=" + smc +"&board=" + board, true);
xhr.send();

}

</script>


<script type="text/javascript">
function gotoDeleteStudent(){

var sid= document.getElementById("sid").value;
var xhr;

xhr = new XMLHttpRequest();

xhr.onreadystatechange= function getInfo(){

if(xhr.readyState == 4 && xhr.status == 200){

  var response = parseInt(xhr.responseText);

  //alert("response : " + response + " " + xhr.responseText);

  if(response == 0){

      alert("Technical error");
      //window.location = "faculty_profile.php";

  }
  else if(response == 1){

      alert("Student Deleted");
      window.location = "admin_acad_slist.php";

  }

}

}; 

xhr.open("GET","deletestudent.php?s_id=" + sid, true);
xhr.send();

}

</script>


<script>
$(function () {
  $('[data-toggle="popover"]').popover({placement: function() { return $(window).width() < 768 ? 'bottom' : 'right'; }})
})
</script>

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form id="stu-master-form" action="http://localhost/admin_acad_Slist.php" method="post">
<input name="_csrf" value="ZElBdlJERGoXGwcfCiUPJFACLBIrFXMtEh4xFRFzcwFJfQI/Cz0VJg==" type="hidden">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Student Details</h4>
      </div>
    <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
		<div class="form-group field-stuinfo-stu_unique_id">
<label class="control-label" for="stuinfo-stu_unique_id">Student ID</label><input id="sid" class="form-control" name="StuInfo[stu_unique_id]" type="text"value="<?php echo $id; ?>"><div class="help-block"></div>
</div>    </div>
    
   </div>
   

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_first_name">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input id="name" class="form-control" name="StuInfo[stu_first_name]" type="text"value="<?php echo $name; ?>"><div class="help-block"></div>
</div>    </div>

    
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input id="lname" class="form-control" name="StuInfo[stu_last_name]" type="text"value="<?php echo $lastname; ?>"><div class="help-block"></div>
</div>    </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label><input id="gen" class="form-control" name="StuInfo[stu_gender]"type="text"value="<?php echo $gen; ?>">
</input><div class="help-block"></div>
</div>    </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_degree">
<label class="control-label" for="stuinfo-stu_degree">Father name</label><input id="fname" class="form-control" name="StuInfo[stu_email_id]" maxlength="60" type="text"value="<?php echo $fname; ?>"><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_degree_field">
<label class="control-label" for="stuinfo-stu_degree_field">Mother name</label><input id="mname" class="form-control" name="StuInfo[stu_mobile_no]" maxlength="20" type="text"value="<?php echo $mname; ?>"><div class="help-block"></div>
</div>    </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mobile no.</label><input size="10" id="smob" onchange="return checkMobile('smob')" class="form-control hasDatepicker" name="StuInfo[stu_dob]" type="text"value="<?php echo $smob; ?>">
<div class="help-block"></div>
</div>		
	</div>
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stumaster-stu_master_category_id">
<label class="control-label" for="stumaster-stu_master_category_id">Guardian-Mobile-No</label><input id="gmob" onchange="return checkMobile('gmob')" class="form-control" name="StuMaster[stu_master_category_id]"value="<?php echo $gmob; ?>">
</input><div class="help-block"></div>
</div>  </div>  
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stumaster-stu_master_category_id">
<label class="control-label" for="stumaster-stu_master_category_id">guardian-email</label><input id="gemail" onchange="return checkEmail()" class="form-control" name="StuMaster[stu_master_category_id]"value="<?php echo $gmail; ?>">
</input><div class="help-block"></div>
</div>	</div> 
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Address</label><input id="addr" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $address; ?>">
</input><div class="help-block"></div>
</div>	</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">City</label><input id="city" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $city; ?>">
</input><div class="help-block"></div>
</div>  </div> 
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">State</label><input id="state" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $state; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Pin</label><input id="pin"  onchange="pinCheck()" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $pin; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">board</label><input id="board" class="form-control" name="StuMaster[stu_master_nationality_id]"  value="<?php echo $board; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Batch</label><input id="batch" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $batch; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">JEE-ROLL NO</label><input id="jeern" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $jeerollno; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">JEE-RANK</label><input id="jeerank" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $jeerank; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Give Password</label><input id="pwd" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $Password; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Status-ARA</label><input id="statusara" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $statusara; ?>">
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Status-MC</label><input id="statusmc" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $statusmc; ?>">
</input><div class="help-block"></div>
</div>  </div>

   </div>
 

  </div><!---./end box-body->
</div><!-./end box-->

<div class="box box-solid box-warning col-xs-12 col-lg-12 no-padding">
  <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <input type="button" class="btn btn-block btn-success" value="Save Changes" onclick="gotoSaveStudent();"></div>
	<div class="col-xs-6">
	    <input type="button" class="btn btn-block btn-success" value="Delete" onclick="gotoDeleteStudent();">	</div>
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