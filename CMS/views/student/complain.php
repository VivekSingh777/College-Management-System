<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Complaint</li>
</ul>

    <section class="content">
        

<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="glyphicon glyphicon-dashboard"></i> Complaint</h3>
	</div>
	<div class="box-body">

	<div class="row">
	<!--	<div class="col-md-6 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-yellow"><i class="fa fa-envelope"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="?controller=student&action=reqforrebate">Request For Rabate</a></span>
		          <span class="edusec-link-box-desc"></span>
			  <span class="edusec-link-box-bottom"><a href="?controller=student&action=rebate_status&st_id=201352015"><i class="fa fa-plus-square"></i>View Status Of Request</a></span>
		        </div><!-- /.info-box-content -->
		     <!-- </div><!-- /.info-box --/>
		</div>-->

		<div class="col-md-6 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-teal"><i class="fa fa-clipboard"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="?controller=student&action=view_complain_response&st_id=<?php echo $_SESSION['userid'] ?>">View Complaint Response</a></span>
		          <span class="edusec-link-box-number"></span>
			<!-- <span class="edusec-link-box-desc">Manage Student/Employee Dashboard Notice</span>-->
			  <span class="edusec-link-box-bottom"><a href="?controller=student&action=submit_complain&st_id=<?php echo $_SESSION['userid'] ?>"><i class="fa fa-plus-square"></i> Submit Complaint</a></span>
		        </div><!-- /.info-box-content -->
		      </div><!-- /.info-box -->
		</div>

	</div> <!-- /. End Row-->	

</div><!-- /.box-body -->
</div>



   <?php

include_once("php_includes/footer.php");

 ?>

</aside>


	
      </div>
    <script src="Mess%20Module_files/moment.js"></script>
<script src="Mess%20Module_files/jquery-ui.js"></script>
<script src="Mess%20Module_files/fullcalendar.js"></script>
<script src="Mess%20Module_files/gcal.js"></script>
<script src="Mess%20Module_files/lang-all.js"></script>
<script src="Mess%20Module_files/en.htm"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$('#w0').fullCalendar({"fixedWeekCount":false,"weekNumbers":true,"editable":true,"selectable":true,"eventLimit":true,"eventLimitText":"more Events","selectHelper":true,"header":{"center":"title","left":"today prev,next","right":"month,agendaWeek,agendaDay"},"select":	function(start, end, allDay) {
		var start = moment(start).unix();
	   	var end = moment(end).unix();
		$.ajax({
		   url: "/CMS/index.php?r=dashboard%2Fevents%2Fadd-event",
		   data: { start_date : start, end_date : end, return_dashboard : 1 },
		   type: "GET",
		   success: function(data) {
			   $(".modal-body").addClass("row");
			   $(".modal-header").html('<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3>Add Event</h3>');
			   $('.modal-body').html(data);
			   $('#eventModal').modal();
		   }
	   	});
			},"eventClick":	function(calEvent, jsEvent, view) {
	    var eventId = calEvent.id;
		$.ajax({
		   url: "/CMS/index.php?r=dashboard%2Fevents%2Fupdate-event",
		   data: { event_id : eventId, return_dashboard : 1 },
		   type: "GET",
		   success: function(data) {
			   $(".modal-body").addClass("row");
			   $(".modal-header").html('<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3> Update Event </h3>');
			   $('.modal-body').html(data);
			   $('#eventModal').modal();
		   }
	   	});
		$(this).css('border-color', 'red');
	},"eventRender":		function (event, element) {
			var start_time = moment(event.start).format("DD-MM-YYYY, h:mm:ss a");
		    	var end_time = moment(event.end).format("DD-MM-YYYY, h:mm:ss a");

			element.popover({
		            title: event.title,
		            placement: 'top',
		            html: true,
			    global_close: true,
			    container: 'body',
			    trigger: 'hover',
			    delay: {"show": 500},
		            content: "<table class='table'><tr><th> Event Detail : </th><td>" + event.description + " </td></tr><tr><th> Event Type : </th><td>" + event.event_type + "</td></tr><tr><th> Start Time : </t><td>" + start_time + "</td></tr><tr><th> End Time : </th><td>" + end_time + "</td></tr></table>"
        		});
               },"aspectRatio":2,"timeFormat":"hh(:mm) A","events":"/CMS/index.php?r=dashboard%2Fevents%2Fview-events"});
jQuery('#eventModal').modal({"show":false});
});</script>    
    
    </body></html>