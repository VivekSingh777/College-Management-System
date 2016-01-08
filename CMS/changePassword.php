
<?php include_once("php_includes/common_frame.php");
    include_once("php_includes/include_admin_column.php");
?>


        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Change Password</li>
</ul>

 <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-6 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i> Change User Password</h3></div>
</div>

<div class="col-xs-12 col-lg-12">
  <div class="box-info box view-item col-xs-12 col-lg-12">
    <div class="form">
	<form id="change-password-form" action="" method="get" onsubmit="return false;">
<input type="hidden" name="_csrf" value="eFFIRkJwbUkRExd.GwMcGTIhAykqXRgsDQE7CDccGBE3Nn4XIUc.Bw==">
	<div class="form-group field-user-current_pass required">
<label class="control-label" for="user-current_pass">Current Password</label><input type="password" id="user-current_pass" class="form-control" name="User[current_pass]" maxlength="60" placeholder="Current Password"><div class="help-block"></div>
</div>
	<div class="form-group field-user-new_pass required">
<label class="control-label" for="user-new_pass">New Password</label><input type="password" id="user-new_pass" class="form-control" name="User[new_pass]" maxlength="60" placeholder="New Password"><div class="help-block"></div>
</div>
	<div class="form-group field-user-retype_pass required">
<label class="control-label" for="user-retype_pass">Retype Password</label><input type="password" id="user-retype_pass" class="form-control" name="User[retype_pass]" maxlength="60" placeholder="Retype Password"><div class="help-block"></div>
</div>
   <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
   <input type="button" id="save" class="btn btn-success" value="Save" onclick="changePass('<?php echo $_SESSION['userid'] ?>','<?php echo $_SESSION['userType'] ?>');">
  <a href="home.php"><input type="button" id="cancel" class="btn btn-danger" value="Cancel"></a>         
	<!--div class="col-xs-6">
  <input type="button" id="cancel" class="btn btn-danger" value="Cancel">
	   
     </div-->
 </form>    </div>
  </div>
</div>
    </section>

  
<?php

include_once("php_includes/footer.php");

 ?>

</aside>


	
      </div>
      <script src="js/home_js.js"></script>
    <script src="js/yii.validation.js"></script>
<script src="js/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#change-password-form').yiiActiveForm([{"id":"user-current_pass","name":"current_pass","container":".field-user-current_pass","input":"#user-current_pass","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});}},{"id":"user-new_pass","name":"new_pass","container":".field-user-new_pass","input":"#user-new_pass","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});}},{"id":"user-retype_pass","name":"retype_pass","container":".field-user-retype_pass","input":"#user-retype_pass","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.compare(value, messages, {"operator":"==","type":"string","compareAttribute":"user-new_pass","skipOnEmpty":1,"message":"Retype Password must be repeated exactly."});}}], []);
});</script>    </body>
    </html>
    