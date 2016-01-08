<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Student Profile</li>
</ul>

    <section style="min-height: 559px;" class="content">
        <script>
$(document).ready(function(){
    $('.tab-content').slimScroll({
        height: '300px'
    });
});
$(document).ready(function(){
    $('#coursList').slimScroll({
        height: '250px'
    });
});
</script>
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
<!--connnecting to database -->
<?php

  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("cms",$conn);
//  session_start();
 
  //Check whether the session variable SESS_MEMBER_ID is present or not
  //if(!isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
  //header("location: index.php");
  //exit();
//}
?> 

<!-- SQL query goes here -->
<?php 
$strSQL = "SELECT sid, firstname, lastname, father_name, mother_name, gender, guardian_email, s_mob_no, address, batch, branch, state, blood_group FROM student WHERE sid = '".$id."'";
  $rs = mysql_query($strSQL);

 while($row = mysql_fetch_array($rs)) {
  $id = $row['sid'];
  $name= $row['firstname'];
  $lastname=$row['lastname'];
  $fname= $row['father_name'];
  $mname= $row['mother_name'];
  $gen= $row['gender'];
  $gmail=  $row['guardian_email'];
  $mob= $row['s_mob_no'];
  $batch=$row['batch'];
  $branch=$row['branch'];
  $address=$row['address'];
  $Blood= $row['blood_group'];
  $state=$row['state'];
}
?>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Profile</h3></div>
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
    <form id="stu-master-form" action="/readyMadeCode/eduSec/index.php?r=student%2Fstu-master%2Fcreate" method="post">
<input type="hidden" name="_csrf" value="NHBnY0dyWktnPD8oLyEJHQxdBCkjNmonZ0hXAHEzKxplIg0GMUEbBQ==">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i>Personal Details</h4>
      </div>
    <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-9 col-sm-4">
    <div class="form-group field-stuinfo-stu_unique_id">
<label class="control-label" for="stuinfo-stu_unique_id">Student ID</label><input type="text" id="stuinfo-stu_unique_id" class="form-control" name="sid" value="<?php echo $id; ?>" readonly><div class="help-block"></div>
</div>    </div>
  </div>
   
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
     <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name">
<label class="control-label" for="stuinfo-stu_first_name">First Name</label><input type="text" id="stuinfo-stu_first_name" class="form-control" name="firstname" value="<?php echo $name; ?>" readonly><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name ">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label><input type="text" id="stuinfo-stu_last_name" class="form-control" name="lastname" value="<?php echo $lastname; ?>" readonly><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mobile No</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="s_mob_no" maxlength="10" value="<?php echo $mob; ?>" readonly><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label><input type="text" id="stuinfo-stu_mother_name" class="form-control" name="gender" value="<?php echo $gen; ?>" readonly><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Father Name</label><input type="text" id="stuinfo-stu_father_name" class="form-control" name="father_name" value="<?php echo $fname; ?>" readonly><div class="help-block"></div>
</div>    </div>
   <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name">
<label class="control-label" for="stuinfo-stu_last_name">Mother Name</label><input type="text" id="stuinfo-stu_mother_name" class="form-control" name="mother_name" value="<?php echo $mname; ?>" readonly><div class="help-block"></div>
</div>    </div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_email_id">
<label class="control-label" for="stuinfo-stu_email_id">Guardian-Email</label><input type="text" id="stuinfo-stu_email_id" class="form-control" name="guardian_email" maxlength="60" value="<?php echo $gmail; ?>" readonly><div class="help-block"></div>
</div>    </div>
   <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob">
<label class="control-label" for="stuinfo-stu_dob">Batch</label><input type="text" id="stuinfo-stu_dob" class="form-control" name="batch" value="<?php echo $batch; ?>" readonly>
<div class="help-block"></div>
</div>    
   </div>

  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob">
<label class="control-label" for="stuinfo-stu_dob">Branch</label><input type="text" id="stuinfo-stu_dob" class="form-control" name="branch" value="<?php echo $branch; ?>" readonly>
<div class="help-block"></div>
</div>    
  </div> 

 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_address required">
<label class="control-label" for="stuinfo-stu_address">Address</label><input type="address" id="stuinfo-stu_address" class="form-control" name="address" value="<?php echo $address; ?>" readonly><div class="help-block"></div>
</div>    
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_state required">
<label class="control-label" for="stuinfo-stu_state">State</label><input type="text" id="stuinfo-stu_state" class="form-control" name="state" value="<?php echo $state; ?>" readonly><div class="help-block"></div>
</div>    </div>
   </div>
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
    
    </body></html>