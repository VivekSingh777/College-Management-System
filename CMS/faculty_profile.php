<?php 

include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_f.php");
include_once("php_includes/include_faculty_column.php");

  $id = $_SESSION['userid'];
  $lastname="";
  $degree="";
  $deg_field="";
  $gen="";
  $mail="";
  $mob="";
  $city="";
  $joindate="";
  $address="";
  $state="";
  $name="";
  $Blood="";
  
?>
<style>
.tab-content {
   padding:15px;
}
.box .box-body .fc-widget-header {
    background: none;
}
.popover{
    max-width:450px;   
}
</style>

<!-- SQL query goes here -->
<?php 
//$strSQL = "SELECT fid, firstname, lastname, degree, degree_field, gender, f_email, f_mob_no, address, city, join_date, pin, state, blood_group FROM faculty WHERE fid = '$id'";
$strSQL = "SELECT fid, firstname, lastname, degree, degree_field, gender, f_email, f_mob_no, address, city, pin, state, blood_group FROM faculty WHERE fid = '$id'";
$rs = mysqli_query($db_conx, $strSQL);
//$row = mysqli_fetch_row($rs);

//$sql = "SELECT sid, password FROM student WHERE sid='$u' LIMIT 1";$query = mysqli_query($db_conx, $strSQL);

//$db_id = $row[0];
//$db_password = $row[1];

while($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)){
  $id = $row['fid'];
  $name= $row['firstname'];
  $lastname=$row['lastname'];
  $degree= $row['degree'];
  $deg_field= $row['degree_field'];
  $gen= $row['gender'];
  $mail=  $row['f_email'];
  $mob= $row['f_mob_no'];
  $city= $row['city'];
  //$joindate=$row['join_date'];
  $pin=$row['pin'];
  $address=$row['address'];
  $Blood= $row['blood_group'];
  $state=$row['state'];
  }
?>

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
        <aside class="right-side">

        <!--ul class="breadcrumb"><li><a href="admin_acad_profile.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="admin_acad_dash.php">Academic</a></li>
<li class="active">Student Record</li>
</ul-->

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form id="stu-master-form" action="/readyMadeCode/eduSec/index.php?r=student%2Fstu-master%2Fcreate" method="post">
<input type="hidden" name="_csrf" value="NHBnY0dyWktnPD8oLyEJHQxdBCkjNmonZ0hXAHEzKxplIg0GMUEbBQ==">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i>Personal Details</h4>
      </div>
    <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
    <div class="form-group field-stuinfo-stu_unique_id required">
<label class="control-label" for="stuinfo-stu_unique_id">Faculty ID</label><input type="text" id="stuinfo-stu_unique_id" class="form-control" name="StuInfo[stu_unique_id]" value="<?php echo $id; ?>" readonly><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-3 col-sm-8" style="padding-top: 25px;">
  
    </div>
   </div>
   
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input type="text" id="stuinfo-stu_first_name" class="form-control" name="first_name" value="<?php echo $name; ?>" readonly><div class="help-block"></div>
</div>    </div>
<!--
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Middle Name</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="StuInfo[stu_middle_name]"><div class="help-block"></div>
</div>    </div>
-->
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input type="text" id="stuinfo-stu_last_name" class="form-control" name="last_name" value="<?php echo $lastname; ?>" readonly><div class="help-block"></div>
</div>    </div>
   </div>

  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Degree</label><input type="text" id="stuinfo-stu_father_name" class="form-control" name="father_name" value="<?php echo $degree; ?>" readonly><div class="help-block"></div>
</div>    </div>
   </div>

  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Degree Field</label><input type="text" id="stuinfo-stu_mother_name" class="form-control" name="mother_name" value="<?php echo $deg_field; ?>" readonly><div class="help-block"></div>
</div>    </div>
   </div>

  <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label><input type="text" id="stuinfo-stu_mother_name" class="form-control" name="mother_name" value="<?php echo $gen; ?>" readonly><div class="help-block"></div>
</div>    </div>


    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_email_id">
<label class="control-label" for="stuinfo-stu_email_id">Email</label><input type="text" id="stuinfo-stu_email_id" class="form-control" name="email_id" maxlength="60" value="<?php echo $mail; ?>" readonly><div class="help-block"></div>
</div>    </div>
   
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mobile No</label><input type="number" id="stuinfo-stu_mobile_no" class="form-control" name="s_mob_no" maxlength="12" value="<?php echo $mob; ?>" readonly><div class="help-block"></div>
</div>    </div>
   
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Join Date</label><input type="date" id="stuinfo-stu_dob" class="form-control" name="birth_date" value="<?php echo $joindate; ?>" readonly>
<div class="help-block"></div>
</div>    
  </div> 

 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_address required">
<label class="control-label" for="stuinfo-stu_address">Address</label><input type="address" id="stuinfo-stu_address" class="form-control" name="address" value="<?php echo $address; ?>" readonly><div class="help-block"></div>
</div>    
</div>

<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_city required">
<label class="control-label" for="stuinfo-stu_city">City</label><input type="text" id="stuinfo-stu_city" class="form-control" name="city" value="<?php echo $city; ?>" readonly><div class="help-block"></div>
</div>    </div>

   </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
   
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_pin_code required">
<label class="control-label" for="stuinfo-stu_pin_code">Pin Code</label><input type="number" id="stuinfo-stu_pin_code" class="form-control" name="pin_code" value="<?php echo $pin; ?>" readonly><div class="help-block"></div>
</div>    </div>
   
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_state required">
<label class="control-label" for="stuinfo-stu_state">State</label><input type="text" id="stuinfo-stu_state" class="form-control" name="state" value="<?php echo $state; ?>" readonly><div class="help-block"></div>
</div></div>   
    </div>

     </section>

                

    <script src="js/moment.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/gcal.js"></script>
<script src="js/lang-all.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$(function() {
    $('.noticeModalLink').click(function() {
        $('#NoticeModal').modal('show')
        .find('#NoticeModalContent')
        .load($(this).attr('data-value'));
    });
});
$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide'); 
        }
    });
});
jQuery('#NoticeModal').modal({"show":false});
$('#w0').fullCalendar({"fixedWeekCount":false,"weekNumbers":true,"editable":true,"eventLimit":true,"eventLimitText":"more Events","header":{"center":"title","left":"prev,next today","right":"month,agendaWeek,agendaDay"},"eventClick":       function(event, jsEvent, view) {
            $('.fc-event').on('click', function (e) {
            $('.fc-event').not(this).popover('hide');
            });
        },"eventRender":        function (event, element) {
            var start_time = moment(event.start).format("DD-MM-YYYY, h:mm:ss a");
                var end_time = moment(event.end).format("DD-MM-YYYY, h:mm:ss a");

            element.clickover({
                    title: event.title,
                    placement: 'top',
                    html: true,
                global_close: true,
                container: 'body',
                    content: "<table class='table'><tr><th>Event Detail : </th><td>" + event.description + " </td></tr><tr><th> Event Type : </th><td>" + event.event_type + "</td></tr><tr><th> Start Time : </t><td>" + start_time + "</td></tr><tr><th> End Time : </th><td>" + end_time + "</td></tr></table>"
                });
               },"contentHeight":380,"timeFormat":"hh(:mm) A","events":"/edusec/index.php?r=dashboard%2Fevents%2Fview-events"});
});</script>    
    <?php include_once("php_includes/footer.php"); ?>
    </body></html>