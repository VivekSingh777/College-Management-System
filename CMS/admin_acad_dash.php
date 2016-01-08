<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>

         <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Academic</li>
</ul>

    <section class="content">
        

          <!-- Main content -->
                <section style="min-height: 559px;" class="content">

                    <!-- Small boxes (Stat box) -->
				<div class="callout callout-info msg-of-day">
			    <h4><i class="fa fa-bullhorn"></i> Message of day box</h4>
			    <p><marquee onmouseout="this.setAttribute('scrollamount', 6, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" scrollamount="6" behavior="scroll" direction="left">Each Day is a GIFT don't send it BACK unopened.  Have a nice Day !</marquee></p>
		</div>
		
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <p>
                                       <a class="aaa" href="admin_acad_Slist.php" style="color:white;">Student Records</a>
                                  </p>
                                </div> 

                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <p>
                                       <a class="aaa" href="admin_acad_flist.php" style="color:white;">Faculty Record</a>                                  
                                    </p>
                                </div>                          
                            </div>
                        </div>
                        <!-- ./col -->
                                           <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua" style="min-height: 45px;">
                                <div class="inner">
                                    <p>
                                       <a class="aaa" href="admin_acad_result.php" style="color:white;">Result</a>
                                    </p>
                                </div>
                            </div>
                        </div>
</div>
 
                            <!-- ./col -->
                        </div>
                        <!-- ./col -->
                        </div>

                        <!-- ./col -->
                    </div>
                    <!-- Main row -->

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        

    </section>

    


</aside>


    </div>



    <script src="js1//moment.js"></script>
<script src="js1//jquery-ui.js"></script>
<script src="js1//fullcalendar.js"></script>
<script src="js1//gcal.js"></script>
<script src="js1//lang-all.js"></script>
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
		            content: "<table class='table'><tr><th>Event Detail : </th><td>" + event.description + " </td></tr><tr><th> Event Type : </th><td>" + event.event_type + "</td></tr><tr><th> Start Time : </t><td>" + start_time + "</td></tr><tr><th> End Time : </th><td>" + end_time + "</td></tr></table>"
        		});
               },"contentHeight":380,"timeFormat":"hh(:mm) A","events":"/edusec/index.php?r=dashboard%2Fevents%2Fview-events"});
});</script>    

    </style>
    </body></html>