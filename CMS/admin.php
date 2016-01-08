

<?php include_once("php_includes/common_frame_a.php");
    include_once("php_includes/include_admin_column.php");
    include_once("php_includes/include_admin_section.php");
?>
</body>

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
                    content: "<table class='table'><tr><th> Event Detail : </th><td>" + event.description + " </td></tr><tr><th> Event Type : </th><td>" + event.event_type + "</td></tr><tr><th> Start Time : </t><td>" + start_time + "</td></tr><tr><th> End Time : </th><td>" + end_time + "</td></tr></table>"
                });
               },"contentHeight":380,"timeFormat":"hh(:mm) A","events":"/CMS/index.php?r=dashboard%2Fevents%2Fview-events"});
});</script>    
    


    </html>