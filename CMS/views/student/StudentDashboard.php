<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Student Dashboard</li>
</ul>

    <section class="content">
        <script>
//jQuery.noConflict();
$(document).ready(function(){
    $('.tab-content').slimScroll({
        height: '300px'
    });
});
$(document).ready(function(){
    $('#coursList').slimScroll({
        height: '250px'
    });
    $('#holidayList').slimScroll({
        height: '458px'
    });
});
//fc-day-grid-container fc-scroller
</script>
<style>
.tab-content {
   padding:15px;
}
.box .box-body .fc-widget-header {
    background: none;
}
.edusec-link-box-icon {
    line-height: 0px !important;
}
.edusec-link-box-content {
    font-size:15px !important;
}
.popover{
    max-width:450px;   
}
</style>



<div id="NoticeModal" class="fade modal" role="dialog" tabindex="-1">
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4><i class="fa fa-eye"></i> View Notice Details</h4>
</div>
<div class="modal-body">
<div id="NoticeModalContent"></div>
</div>

</div>
</div>
</div>
<!-- Main content -->
<section class="content">

    	<!--- Start Display Message Of Day Block --->
		<!--- End Display Message Of Day Block --->

	<!-- Start Display First Row Containt Profile Information -->
	<div class="row">
	   <div class="col-sm-4 col-xs-12">
	      <div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-info-circle"></i> My Information</h3>
		</div>
		<div class="box-body table-responsive no-padding">
		<div class="col-md-12 text-center">
			<img class="img-circle edusec-img-disp" src="Student%20Dashboard_files/no-photo.png" alt="No Image" style="margin: 7px;">		</div>
		<table class="table table-striped">
			<tbody><tr>
				<th>Student ID</th>
				<td>15</td>
			</tr>
			<tr>
				<th>Name</th>
				<td>Nash Kabunda</td>
			</tr>
			<tr>
				<th>Course</th>
				<td>B.tech(IT)</td>
			</tr>
			<tr>
				<th>Batch</th>
				<td>Batch-2013</td>
			</tr>
			<tr>
				<th>Email ID</th>
				<td></td>
			</tr
			<tr>
				<th>Mobile No</th>
				<td>7695865796</td>
			</tr>
			<tr>
				<th>Status</th>
				<td>
										<span class="label label-success">Active</span>
									</td>
			</tr>
		</tbody></table>
	      </div><!---/. box-body--->
	      <div class="box-footer text-right">
			<a class="btn btn-default btn-sm" href="Nash Kabunda.htm">More Info <i class="fa fa-arrow-circle-right"></i></a>	      </div>
	     </div><!---/. box--->
	    </div><!---/. col-sm-4-->
	    <div class="col-sm-3 col-xs-12">
		<div class="box box-warning">
		   <div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-inr"></i> Fees Details</h3>
		   </div>
		   <div class="box-body">
			<div class="small-box bg-aqua">
			   <div class="inner">
				<h3>₹ 22000</h3>
				<p>Total Paid Fees</p>
			    </div>
			    <div class="icon">
				<i class="fa fa-inr" style="font-size:55px"></i>
			    </div>
			</div><!---/. small-box-1---> 
			<div class="small-box bg-yellow">
			   <div class="inner">
				<h3>₹ 22000</h3>
				<p>Total paid Fees in active fees category </p>
			    </div>
			    <div class="icon">
				<i class="fa fa-inr" style="font-size:65px"></i>
			    </div>
			</div><!---/. small-box-2---> 	
			<div class="small-box bg-red">
			   <div class="inner">
				<h3>₹ 3000</h3>
				<p>Total unpaid Fees in active fees category </p>
			    </div>
			    <div class="icon">
				<i class="fa fa-inr" style="font-size:65px"></i>
			    </div>
			</div><!---/. small-box-3---> 	
		   </div><!---/. box-body---> 	
		   <div class="box-footer text-center">
			 <a class="small-box-footer" href="Student Fees Data">More Info</a>		   </div>
		</div><!---/. box--->	
	    </div> <!---/.col-sm-3---->
	    <div class="col-sm-5 col-xs-12">
		<div class="box box-info">
		   <div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-calendar-o"></i> Holiday List</h3>
		   </div>
		   <div class="box-body" id="holidayList">
		     <div class="table-responsive">
						<table class="table no-margin">
				<colgroup><col class="col-sm-3">
				<col class="col-sm-9">
				</colgroup><tbody><tr>
					<th>Date</th>
					<th>Holiday</th>
				</tr>
					
				<tr>
					<td>15-08-2015</td>
					<td>Independance Day</td>
				</tr>
					
				<tr>
					<td>26-01-2015</td>
					<td>Republic Day(India)</td>
				</tr>
					
				<tr>
					<td>05-09-2015</td>
					<td>Janmashtami</td>
				</tr>
					
				<tr>
					<td>14-04-2015</td>
					<td>Dr.Ambedkar Jayanti</td>
				</tr>
					
				<tr>
					<td>01-05-2015</td>
					<td>Gujarat Sthapna Divas</td>
				</tr>
							</tbody></table>
					     </div><!---/. end-responsive-div--->
		   </div><!---/. box-body---> 	
		</div><!---/. box---> 	
	    </div><!---/. col-div---> 	
	</div><!---/. row--->
    <!-- End First Row Block -->

          
    <!-- Start second row block -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

	   <div class="nav-tabs-custom"><!-- .nav-tabs-custom -->
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
		    <li><a href="#all-notice" data-toggle="tab">General</a></li>
                    <li class="active"><a href="#stu-notice" data-toggle="tab">Student</a></li>
                    <li class="pull-left header"><i class="fa fa-inbox"></i>Notice Board</li>
                </ul>
                <div class="tab-content">
                    <!-- Notice -->
                    <div class="tab-pane" id="all-notice">
			
						 <div class="notice-main bg-light-blue">
				<div class="notice-disp-date">				       
					<small class="label label-success"><i class="fa fa-calendar"></i> 30-05-2015</small>	
				</div>
				<div class="notice-body">
					 <div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/CMS/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=3">Summer Vacation</a>&nbsp; </div>
					 <div class="notice-desc">Summer Vacation starts from June to  2nd week of July. </div>
				</div>					          
			</div>
					    </div>
                    <div class="tab-pane active" id="stu-notice">
			
						<div class="notice-main bg-aqua">
				<div class="notice-disp-date">				        		<small class="label label-success"><i class="fa fa-calendar"></i> 01-06-2015</small>	
				</div>
				<div class="notice-body">
					 <div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/CMS/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=1">Next Week Summer Exam </a>&nbsp; </div>
					 <div class="notice-desc">summer Exam will be conducted on Next week. All The Best </div>
				</div>					          
			</div>
						<div class="notice-main bg-aqua">
				<div class="notice-disp-date">				        		<small class="label label-success"><i class="fa fa-calendar"></i> 25-05-2015</small>	
				</div>
				<div class="notice-body">
					 <div class="notice-title"><a class="noticeModalLink" href="#" style="color:#FFF" data-value="/CMS/index.php?r=dashboard%2Fnotice%2Fview-popup&amp;id=5">Exam From Fill</a>&nbsp; </div>
					 <div class="notice-desc">All Students come and fill their exam forms </div>
				</div>					          
			</div>
					    </div>
                </div> <!--  /.tab-content -->
            </div><!-- /.nav-tabs-custom -->

	    <!-- Calendar -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title">Calendar</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <!--The calendar -->
		?&gt;
                    <div id="w0" class="fullcalendar" language="es">
</div>
		   <div class="row">
			<ul class="legend">
			    <li><span class="holiday"></span> Holiday</li>
			    <li><span class="importantnotice"></span> Important Notice</li>
			    <li><span class="meeting"></span> Meeting</li>
			    <li><span class="messages"></span> Messages</li>
			</ul>
		   </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

	    <div class="nav-tabs-custom"><!-- .nav-tabs-custom -->
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#birth-upcoming" data-toggle="tab">Upcoming</a></li>
		    <li class="active"><a href="#birth-taday" data-toggle="tab">Today's</a></li>
                    <li class="pull-left header"><i class="fa fa-birthday-cake"></i>Birthdays</li>
                </ul>
                <div class="tab-content">
                    <!-- Birthdays -->
		    <div class="tab-pane active" id="birth-taday">
			<div class="box-header bg-warning"><div style="padding:5px">No Birthday Today</div></div>		    </div>
                    <div class="tab-pane" id="birth-upcoming">
			<div class="box-header bg-warning"><div style="padding:5px">No Birthday within 30 days duration</div></div>		    </div>
                </div> <!--  /.tab-content -->
            </div><!-- /.nav-tabs-custom -->

	    <!-- TO DO List -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="ion ion-university"></i>
                    <h3 class="box-title">Courses</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list" id="coursList">
		                             <li>
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <span class="text">MCA</span>
						    <span class="notification-container pull-right text-teal" title="5 Students"><i class="fa fa-users"></i><span class="label label-info notification-counter">5</span></span>
                        </li>
		                             <li>
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <span class="text">BCA</span>
						    <span class="notification-container pull-right text-teal" title="3 Students"><i class="fa fa-users"></i><span class="label label-info notification-counter">3</span></span>
                        </li>
		                             <li>
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <span class="text">M.Sc.IT</span>
						    <span class="notification-container pull-right text-teal" title="3 Students"><i class="fa fa-users"></i><span class="label label-info notification-counter">3</span></span>
                        </li>
		                             <li>
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <span class="text">B.Sc.IT</span>
						    <span class="notification-container pull-right text-teal" title="2 Students"><i class="fa fa-users"></i><span class="label label-info notification-counter">2</span></span>
                        </li>
		                             <li>
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <span class="text">MBA</span>
						    <span class="notification-container pull-right text-teal" title="2 Students"><i class="fa fa-users"></i><span class="label label-info notification-counter">2</span></span>
                        </li>
		                         </ul>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- right col -->
    </div><!-- /.row (main row) -->

</section><!-- /.content -->

<!-- add new calendar event modal -->
    </section>

    <?php

include_once("php_includes/footer.php");

 ?>

</aside>



    </div>

    <script src="Student%20Dashboard_files/moment.js"></script>
<script src="Student%20Dashboard_files/jquery-ui.js"></script>
<script src="Student%20Dashboard_files/fullcalendar.js"></script>
<script src="Student%20Dashboard_files/gcal.js"></script>
<script src="Student%20Dashboard_files/lang-all.js"></script>
<script src="Student%20Dashboard_files/en.htm"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$(function() {
	$('.noticeModalLink').click(function() {
		$('#NoticeModal').modal('show')
		.find('#NoticeModalContent')
		.load($(this).attr('data-value'));
	});
});
jQuery('#NoticeModal').modal({"show":false});
$('#w0').fullCalendar({"fixedWeekCount":false,"weekNumbers":true,"editable":true,"eventLimit":true,"eventLimitText":"more Events","header":{"center":"title","left":"prev,next today","right":"month,agendaWeek,agendaDay"},"eventClick":		function(event, jsEvent, view) {
		    $('.fc-event').on('click', function (e) {
			$('.fc-event').not(this).popover('hide');
		    });
		},"eventRender":		function (event, element) {
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
               },"contentHeight":380,"timeFormat":"hh(:mm) A","events":"/CMS/index.php?r=dashboard%2Fevents%2Fview-events"});
});</script>    
    
    </body></html>