<?php

include_once("php_includes/check_login_status.php");

?>
<!--button><a href='logout.php'>Logout</a></button-->

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="Keywords" content="edusec,edusec4,rudra softech,open source development in ahmedabad, college management software,college management system,education management software,school management system,school management software">
<meta name="Description" content="Software development company for open source technology in Ahmedabad. Provide Enterprise solution and quality services.">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="Rudra Softech - Provide Enterprise Solution | Development on open source technology | College Management Software | School Management Software">
<meta property="og:description" content="Core functions like admissions, library management, transport management, students attendance in short entire range of university functions can be well performed by EduSec">
<meta property="og:image" content="http://www.rudrasoftech.com/rudra.png">

		<link rel="shortcut icon" href="http://localhost:8081/CMS/img/rudrasoftech_favicon.png" type="image/x-icon">
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="TVMxNURoTUUdBl54LDd6LQ48CUcAPy82fhdWdzAxPiYfKUcGMSo8Jw==">
        <title>Admin Dashboard</title>
        <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet" media="print">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/fullcalendar_002.css" rel="stylesheet">
<link href="css/AdminLTE.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/ionicons.css" rel="stylesheet">
<link href="css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/EdusecCustome.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/yii.js"></script>
<script src="js/app.htm"></script>
<script src="js/jquery.htm"></script>
<script src="css/bootstrap-multiselect.htm"></script>
<script src="css/custom-delete-confirm.htm"></script>
<script src="css/bootbox.htm"></script>
<script src="css/bootstrap.htm"></script>
<script src="css/bootstrapx-clickover.htm"></script>    </head>
    <body class="skin-black">
    
    

    <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/jishnu.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                   <br> <p> Welcome, <?php echo $_SESSION['userid']; ?></p>
                </div>
            </div>
        
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
		    <li><a href="Master Configuration.htm"><i class="fa fa-cogs"></i> <span>Configuration</span></a></li>
		    <li><a href="Dashboard Modules.htm"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		    <li><a href="?controller=admin&action=course_management"><i class="fa fa-graduation-cap"></i> <span>Course Management</span></a></li>
		    <li><a href="Student Module.htm"><i class="fa fa-users"></i> <span>Student</span></a></li>
		    <li><a href="Employee Module.htm"><i class="fa fa-user"></i> <span>Employee</span></a></li>
		    <li><a href="Fees Module.htm"><i class="fa fa-money"></i> <span>Fees</span></a></li>
		    <li><a href="Report Center.htm"><i class="fa fa-bar-chart"></i> <span>Report Center</span></a></li>
		    <li><a href="Assignments.htm"><i class="fa fa-user-secret"></i> <span>User Rights</span></a></li>
		    <li><a href="Hostel Module.html"><i class="fa fa-user-secret"></i> <span>Hostel</span></a></li>
		    <li><a href="Mess Module.html"><i class="fa fa-user-secret"></i> <span>Mess</span></a></li>
		    <li><a href="Transpotation.html"><i class="fa fa-user-secret"></i> <span>Transpotation</span></a></li>

	        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>

        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="Admin Dashboard.htm"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Admin Dashboard</li>
</ul>

    <section class="content">
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
    <script src="js/moment.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/gcal.js"></script>
<script src="js/lang-all.js"></script>
<script src="js/en.htm"></script>
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
		            content: "<table class='table'><tr><th> Event Detail : </th><td>" + event.description + " </td></tr><tr><th> Event Type : </th><td>" + event.event_type + "</td></tr><tr><th> Start Time : </t><td>" + start_time + "</td></tr><tr><th> End Time : </th><td>" + end_time + "</td></tr></table>"
        		});
               },"contentHeight":380,"timeFormat":"hh(:mm) A","events":"/CMS/index.php?r=dashboard%2Fevents%2Fview-events"});
});</script>    
    
    </body></html>