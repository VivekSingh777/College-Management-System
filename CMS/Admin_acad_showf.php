<?php

$fid = $_GET['fid'];

include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>     <aside class="right-side">

        <ul class="breadcrumb"><li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="admin_acad_dash.php">Academic</a></li>
<li><a href="admin_acad_flist.php">View Faculty</a></li>
<li class="active">Edit Faculty Details</li>
</ul>

    <section style="min-height: 559px;" class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Edit Faculty Details</h3></div>
</div>

<div class="stu-master-create">
    <style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>

<!--connnecting to database -->

<?php

  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("cms",$conn);

?> 

<!-- SQL query goes here -->
<?php 
$strSQL = "SELECT fid, firstname, lastname, degree, degree_field, gender, f_email, f_mob_no, address, city, join_date, pin, state, blood_group,ip,Password FROM faculty WHERE fid = '".$fid."'";
  $rs = mysql_query($strSQL);

 while($row = mysql_fetch_array($rs,MYSQL_ASSOC)) {
  $id = $row['fid'];
  $name= $row['firstname'];
  $lastname=$row['lastname'];
  $degree= $row['degree'];
  $deg_field= $row['degree_field'];
  $gen= $row['gender'];
  $mail=  $row['f_email'];
  $mob= $row['f_mob_no'];
  $city= $row['city'];
  $joindate=$row['join_date'];
  $address=$row['address'];
  $Blood= $row['blood_group'];
  $state=$row['state'];
  $pin=$row['pin'];
  $IP=$row['ip'];
  $Password=$row['Password'];
  $img="img/profile/faculty/".$row['fid'].".jpg";
}
?>


<script type="text/javascript">
function gotoDelete(){

var fid= document.getElementById("fid").value;
var xhr;

xhr = new XMLHttpRequest();

xhr.onreadystatechange= function getInfo(){

if(xhr.readyState == 4 && xhr.status == 200){

  var response = parseInt(xhr.responseText);

  if(response == 0){

      window.location = "faculty_profile.php";

  }
  else{

      alert("Faculty Deleted");
      window.location = "admin_acad_flist.php";

  }

}

}; 

xhr.open("GET","deletefaculty.php?f_id=" + fid, true);
xhr.send();

}

</script>

<script type="text/javascript">
$(function () {
  $('[data-toggle="popover"]').popover({placement: function() { return $(window).width() < 768 ? 'bottom' : 'right'; }})
})
</script>

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form id="stu-master-form" action="http://localhost/admin_acad_flist.php" method="post">
<input name="_csrf" value="ZElBdlJERGoXGwcfCiUPJFACLBIrFXMtEh4xFRFzcwFJfQI/Cz0VJg==" type="hidden">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Faculty Details</h4>
      </div>
    <div class="box-body">
          <div class="container"><br>
<div class="row">
  <div class="span4"></div>
  <div class="span4"><!--span id="results">Jishnu</span-->
  <!-- A button for taking snaps -->

<img id="profile_pic" class="center-block img-thumbnail" src="<?php echo $img; ?>" width="125" height="125"><br></div>
  <div class="span4">
    <a href='#' data-toggle='modal' data-target='#snapshot_window'><input type=button class="btn btn-success center-block" value="Change Picture"></a>
  </div>
</div></div>


   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
		<div class="form-group field-stuinfo-stu_unique_id">
<label class="control-label" for="stuinfo-stu_unique_id">Faculty ID</label><input id="fid" class="form-control" name="StuInfo[stu_unique_id]" type="text"value="<?php echo $id; ?>" disabled><div class="help-block"></div>
</div>    </div>
    
   </div>
   

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_first_name">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input id="fname" class="form-control" name="StuInfo[stu_first_name]" type="text"value="<?php echo $name; ?>"required><div class="help-block"></div>
</div>    </div>

    
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input id="lname" class="form-control" name="StuInfo[stu_last_name]" type="text"value="<?php echo $lastname; ?>"required><div class="help-block"></div>
</div>    </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label><input id="gen" class="form-control" name="StuInfo[stu_gender]"type="text"value="<?php echo $gen; ?>"required>
</input><div class="help-block"></div>
</div>    </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_degree">
<label class="control-label" for="stuinfo-stu_degree">Degree</label><input id="deg" class="form-control" name="StuInfo[stu_email_id]" maxlength="60" type="text"value="<?php echo $degree; ?>"required><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
	<div class="form-group field-stuinfo-stu_degree_field">
<label class="control-label" for="stuinfo-stu_degree_field">Degree Field</label><input id="deg_field" class="form-control" name="StuInfo[stu_mobile_no]" maxlength="20" type="text"value="<?php echo $deg_field; ?>"required><div class="help-block"></div>
</div>    </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mobile no.</label><input size="10" id="mob" onchange="checkMobile('mob')" class="form-control hasDatepicker" name="StuInfo[stu_dob]" type="text"value="<?php echo $mob; ?>"required>
<div class="help-block"></div>
</div>		
	</div> 
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stumaster-stu_master_category_id">
<label class="control-label" for="stumaster-stu_master_category_id">E-mail</label><input id="email" onchange="checkEmail()" class="form-control" name="StuMaster[stu_master_category_id]" placeholder ="abc@gmail.com" value="<?php echo $mail; ?>"required>
</input><div class="help-block"></div>
</div>	</div> 
	<div class="col-xs-12 col-sm-4 col-lg-4">
		<div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Address</label><input id="addr" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $address; ?>"required>
</input><div class="help-block"></div>
</div>	</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">City</label><input id="city" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $city; ?>"required>
</input><div class="help-block"></div>
</div>  </div> 
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">State</label><input id="state" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $state; ?>"required>
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Pin</label><input id="pin" onchange="pinCheck()" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $pin; ?>"required>
</input><div class="help-block"></div>
</div>  </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Join Date</label><input id="join_date" class="form-control" name="StuMaster[stu_master_nationality_id]" placeholder="YYYY-MM-DD" value="<?php echo $joindate; ?>"required>
</input><div class="help-block"></div>
</div>  </div>

        
<div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Change Password</label><input id="pwd" class="form-control" name="StuMaster[stu_master_nationality_id]"value="<?php echo $Password; ?>"required>
</input><div class="help-block"></div>
</div>  </div>
   </div>
 

  </div><!---./end box-body->
</div><!-./end box-->

<div class="box box-solid box-warning col-xs-12 col-lg-12 no-padding">
  <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <input type="button" class="btn btn-block btn-success" value="Save Changes" onclick="gotoSave();"></div>
	<div class="col-xs-6">
        <input type="button" class="btn btn-block btn-success" value="Delete" onclick="gotoDelete();"></div>
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

  
      </div>
    <script src="js1/yii_002.js"></script>
    <script type="text/javascript">

function gotoSave(){


var fn= document.getElementById("fname").value;
var ln= document.getElementById("lname").value;
var gn= document.getElementById("gen").value;

var dg= document.getElementById("deg").value;
var dgf= document.getElementById("deg_field").value;
var mb= document.getElementById("mob").value;

var em= document.getElementById("email").value;
var adr= document.getElementById("addr").value;
var city= document.getElementById("city").value;

var state= document.getElementById("state").value;
var pin= document.getElementById("pin").value;
var jd= document.getElementById("join_date").value;

//var bg= document.getElementById("blood_group").value;
var password= document.getElementById("pwd").value;
var fid= document.getElementById("fid").value;

var xhr;

xhr = new XMLHttpRequest();


xhr.onreadystatechange= function getInfo(){

if(xhr.readyState == 4 && xhr.status == 200){

  var response = xhr.responseText;

   if(response == "failure"){

      window.location = "faculty_profile.php";

  }else{

      alert("Successfully Saved");
      window.location = "admin_acad_showf.php?fid=" + fid;

  }

}

}; 

xhr.open("GET","editfaculty.php?f_id=" + fid +"&first_name=" + fn +"&last_name=" + ln + "&degree=" + dg + "&degree_field=" + dgf + "&gender=" + gn +"&email=" + em + "&mobile_no=" + mb +"&city=" + city + "&joindate=" + jd + "&address=" + adr + "&state=" + state+ "&pin=" + pin + "&password=" + password, true);
xhr.send();

}

</script>

<script src="js1/jquery-ui.js"></script>
<script src="js1/yii.js"></script>
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
        
        Webcam.upload( data_uri, 'php_includes/image_upload_on_edit.php', function(code, text) {
                                            });

        //alert("dd : " + data_uri);

      } );
    }
  </script>

    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div--></body></html>