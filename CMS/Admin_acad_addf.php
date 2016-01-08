<?php
include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>

        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="admin_acad_dash.php">Academic</a></li>
<li><a href="admin_acad_flist.php">Faculty Record</a></li>
<li class="active">Add Faculty</li>
</ul>

    <section style="min-height: 559px;" class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> Add Faculty</h3></div>
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


<script type="text/javascript">
</script>

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
     <p class="note">Fields with <span class="required"> <b style="color:red;">*</b></span> are required.</p>
    <form id="stu-master-form" method="GET">
<input name="_csrf" value="ZElBdlJERGoXGwcfCiUPJFACLBIrFXMtEh4xFRFzcwFJfQI/Cz0VJg==" type="hidden">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Details</h4>
      </div>

      <div class="container"><br>
<div class="row">
  <div class="span4"></div>
  <div class="span4"><!--span id="results">Team3</span-->
  <!-- A button for taking snaps -->

<img id="profile_pic" class="col-md-offset-5 img-circle" src="img/default_pic.png" width="125" height="125"><br><br></div>
  <div class="span4">
    <a href='#' class="col-md-offset-5 img-thumbnail" data-toggle='modal' data-target='#snapshot_window'><input type=button class="btn btn-success center-block" value="Change Picture"></a>
  </div>
</div></div>

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



 
    <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
		<div class="form-group field-stuinfo-stu_unique_id required">
<label class="control-label" for="stuinfo-stu_unique_id">Faculty ID</label><input id="fid" class="form-control" name="f_id" type="text"><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input id="fname" class="form-control" name="first_name" type="text"><div class="help-block"></div>
</div>    </div>

    
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input id="lname" class="form-control" name="last_name" type="text"><div class="help-block"></div>
</div>    </div>
    </div>
   
   

   
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label><select id="gender" class="form-control" name="gender">
<option selected="selected" value="">---Select Gender---</option>
<option value="m">Male</option>
<option value="f">Female</option>
</select>
<div class="help-block"></div>
</div>    </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_email_id">
<label class="control-label" for="stuinfo-stu_email_id">Degree</label><input id="deg" class="form-control" name="degree" maxlength="60" type="text"><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Degree Field</label><input id="deg_field" class="form-control" name="degree_field" maxlength="20" type="text"><div class="help-block"></div>
</div>    </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Mobile no.</label><input size="10" id="mob" class="form-control hasDatepicker" name="mobile_no" type="text">
<div class="help-block"></div>
</div>		
	</div> 
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stumaster-stu_master_category_id">
<label class="control-label" for="stumaster-stu_master_category_id">E-mail</label><input id="email" class="form-control" name="email">
<div class="help-block"></div>
</div>	</div> 
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Address</label><input id="addr" class="form-control" name="address">
<div class="help-block"></div>
</div>	</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">City</label><input id="city" class="form-control" name="city">
<div class="help-block"></div>
</div>  </div> 
<div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">State</label><input id="state" class="form-control" name="state">
<div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Pin</label><input id="pin" class="form-control" name="pin">
<div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Blood Group</label><Select id="blood_group" class="form-control" name="blood_group">
<option value="">---Blood Group---</option>
<option value="ABN">AB-</option>
<option value="ABP">AB+</option>
<option value="AN">A-</option>
<option value="AP">A+</option>
<option value="BN">B-</option>
<option value="BP">B+</option>
<option value="ON">O-</option>
<option value="OP">O+</option>
</Select>
<div class="help-block"></div>
</div>  </div>

<!--div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Join Date</label><input type="date" id="jd" class="form-control" name="jd" placeholder="yyyy-mm-dd">
<div class="help-block"></div>
</div>    
  </div--> 

   </div>
 


<div class="box box-solid box-warning col-xs-12 col-lg-12 no-padding">
  <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <input type="button" class="btn btn-block btn-success" value="ADD" onclick="checkOnFacultyAdd();"></div>
	<div class="col-xs-6">
	    <a class="btn btn-default btn-block" href="http://localhost/edusec/index.php?r=student%2Fstu-master%2Findex">Cancel</a>	</div>
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

    <script src="js/Webcam.js"></script> 
    <script src="js/home_js.js"></script>

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
<!--script type="text/javascript">
  
function goto(){


var fn= document.getElementById("fname").value;
var ln= document.getElementById("lname").value;
var gn= document.getElementById("gender").value;

var dg= document.getElementById("deg").value;
var dgf= document.getElementById("deg_field").value;
var mb= document.getElementById("mob").value;

var em= document.getElementById("email").value;
var adr= document.getElementById("addr").value;
var city= document.getElementById("city").value;

var state= document.getElementById("state").value;
var pin= document.getElementById("pin").value;
//var jd= document.getElementById("jd").value;
var bg= document.getElementById("blood_group");
//var password= document.getElementById("pwd").value;
//var password = "password";
var fid= document.getElementById("fid").value;

var xhr;

xhr = new XMLHttpRequest();

xhr.onreadystatechange= function getInfo(){

if(xhr.readyState == 4 && xhr.status == 200){

  var response = parseInt(xhr.responseText);

  alert("response : " + xhr.responseText);

  if(response == 1){

      //window.location = "faculty_profile.php";
      alert("Success");

  }else{

      alert("Failure");

  }

}

}; 

xhr.open("GET","addfaculty.php?f_id=" + fid +"&first_name=" + fn +"&last_name=" + ln + "&degree=" + dg + "&degree_field=" + dgf + "&gender=" + gn +"&email=" + em + "&mobile_no=" + mb +"&city=" + city  + "&address=" + adr + "&blood_group=" + bg.value + "&state=" + state+ "&pin=" + pin,true);
xhr.send();

}



</script-->
<script src="js1/jquery.js"></script>
<script src="js1/jquery-ui.js"></script>
<script src="js1/yii_002.js"></script>
<script src="js1/yii.js"></script>
<script src="js1/home_js.js"></script>
 
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>