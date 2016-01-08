<?php ?>
<!DOCTYPE html>
<html style="min-height: 1309px;" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="Keywords" content="edusec,edusec4,rudra softech,open source development in ahmedabad, college management software,college management system,education management software,school management system,school management software">
<meta name="Description" content="Software development company for open source technology in Ahmedabad. Provide Enterprise solution and quality services.">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="Rudra Softech - Provide Enterprise Solution | Development on open source technology | College Management Software | School Management Software">
<meta property="og:description" content="Core functions like admissions, library management, transport management, students attendance in short entire range of university functions can be well performed by EduSec">
<meta property="og:image" content="http://www.rudrasoftech.com/rudra.png">

        <link rel="shortcut icon" href="http://localhost/edusec/images/rudrasoftech_favicon.png" type="image/x-icon">
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="TUNvZ1F1cFIYNF4xCBoyMx4KLR8lMQATGRMIMCIAGgoibj0GFi01YA==">
        <title>Faculty Dashboard</title>
        <style>.file-input-wrapper { overflow: hidden; position: relative; cursor: pointer; z-index: 1; }.file-input-wrapper input[type=file], .file-input-wrapper input[type=file]:focus, .file-input-wrapper input[type=file]:hover { position: absolute; top: 0; left: 0; cursor: pointer; opacity: 0; filter: alpha(opacity=0); z-index: 99; outline: 0; }.file-input-name { margin-left: 8px; }</style><link href="Admin%20Dashboard_files/bootstrap.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/fullcalendar_002.css" rel="stylesheet" media="print">
<link href="Admin%20Dashboard_files/jquery-ui.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/fullcalendar.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/AdminLTE.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/font-awesome.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/ionicons.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/bootstrap-multiselect.css" rel="stylesheet">
<link href="Admin%20Dashboard_files/EdusecCustome.css" rel="stylesheet">
<script src="Admin%20Dashboard_files/jquery_002.js"></script>
<script src="Admin%20Dashboard_files/bootstrap_002.js"></script>
<script src="Admin%20Dashboard_files/yii.js"></script>
<script src="Admin%20Dashboard_files/app.js"></script>
<script src="Admin%20Dashboard_files/jquery.js"></script>
<script src="Admin%20Dashboard_files/bootstrap-multiselect.js"></script>
<script src="Admin%20Dashboard_files/custom-delete-confirm.js"></script>
<script src="Admin%20Dashboard_files/bootbox.js"></script>
<script src="Admin%20Dashboard_files/bootstrap.js"></script>
<script src="Admin%20Dashboard_files/bootstrapx-clickover.js"></script>    </head>
    <body style="min-height: 1309px;" class="skin-black  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    
    
<header class="header">

<a class="logo" href="http://localhost/edusec/index.php"><img src="Admin%20Dashboard_files/iiit_img.png" alt="" height="50px" width="160px;"></a>
<nav class="navbar navbar-static-top" role="navigation">

<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<div class="navbar-right">

<ul class="nav navbar-nav">
<li class="dropdown module-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Main Menu">
        <i class="fa fa-th"></i>
    </a>
    
<ul class="dropdown-menu">
    <li>
        <div style="position: relative; overflow: hidden; width: auto; height: 200px;" class="slimScrollDiv"><ul style="overflow: hidden; width: 100%; height: 200px;" class="menu">
                        <li>
                <a href="http://localhost/edusec/index.php?r=default%2Findex"><i class="fa fa-cogs text-aqua fa-2x"></i><h4> Profile</h4></a>            </li>
                                    <li>
                <a href="http://localhost/edusec/index.php?r=dashboard%2Fdefault%2Findex"><i class="fa fa-dashboard text-green fa-2x"></i> <h4>Grade Upload</h4></a>            </li>
                                    <li>
                <a href="http://localhost/edusec/index.php?r=course%2Fdefault%2Findex"><i class="fa fa-graduation-cap text-yellow fa-2x"></i> <h4>Course Material Upload</h4></a>            </li>
                                    <li>
                <a href="http://localhost/edusec/index.php?r=student%2Fdefault%2Findex"><i class="fa fa-users text-orange fa-2x"></i> <h4>Anouncements</h4></a>            </li>
                                    <li>
                
                    </ul><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
    </li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">0</span>
    </a>
    <ul class="dropdown-menu">

        <li class="header">You have No  notifications</li>
        </ul>
</li>

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>Faculty <i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu" style="margin-right:10px">
            <!-- User image -->
            <li class="user-header bg-light-blue">
                <img src="Admin%20Dashboard_files/no-photo.png" class="img-circle" alt="User Image">

                <p style="font-size: 18px;">
                    Faculty                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body" style="display:none">
                <div class="col-xs-6 no-padding">
            <a class="btn btn-default btn-flat" href="http://localhost/edusec/index.php" style="font-size:13px">View Profile</a>                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
            <a class="btn btn-default btn-flat" href="http://localhost/edusec/index.php?r=user%2Fchange" style="font-size:12px">Change Password</a>                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="http://localhost/edusec/index.php?r=site%2Flogout" data-method="post" style="font-size:12px">Sign out</a>                </div>
            </li>
        </ul>
    </li><!-- User Account: style can be found in dropdown.less -->

</ul>
</div>
</nav>
</header>

    <div style="min-height: 559px;" class="wrapper row-offcanvas row-offcanvas-left">

           <aside style="min-height: 1309px;" class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="Admin%20Dashboard_files/no-photo.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> Welcome, Faculty</p>
                </div>
            </div>
        
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
            <li><a href="http://localhost/edusec/index.php?r=default%2Findex"><i class="fa fa-cogs"></i> <span>Profile</span></a></li>
            <li><a href="http://localhost/edusec/index.php?r=dashboard%2Fdefault%2Findex"><i class="fa fa-dashboard"></i> <span>Grade Upload</span></a></li>
            <li><a href="http://localhost/edusec/index.php?r=course%2Fdefault%2Findex"><i class="fa fa-graduation-cap"></i> <span>Course Material Upload</span></a></li>
            <li><a href="http://localhost/edusec/index.php?r=student%2Fdefault%2Findex"><i class="fa fa-users"></i> <span>Anouncement</span></a></li>
       </ul>

    <!-- sidebar-menu. -- End -->

    </section>

</aside>

        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="http://localhost/edusec/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Faculty Dashboard</li>
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
                

    <script src="Admin%20Dashboard_files/moment.js"></script>
<script src="Admin%20Dashboard_files/jquery-ui.js"></script>
<script src="Admin%20Dashboard_files/fullcalendar.js"></script>
<script src="Admin%20Dashboard_files/gcal.js"></script>
<script src="Admin%20Dashboard_files/lang-all.js"></script>
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