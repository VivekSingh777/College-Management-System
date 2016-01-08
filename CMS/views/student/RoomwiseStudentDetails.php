<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="?controller=student&action=hostel_module">Hostel Module</a></li>
<li class="active">Roomwise Student Details</li>
</ul>

    <section class="content">
        

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="msg-of-day-index">
	<div id="w0">	    <style>
.glyphicon-remove-circle {
  color : #C9302C;
}
.glyphicon-ok-circle {
  color : #449D44;
}
</style>
<div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th><a >Hostel No. </a></th><th><a >Room No </a></th><th>Residents</th></tr>
</thead>
<tbody>

<?php   $counter=1; ?>
<!--    save input here  -->
<?php foreach($posts as $post) { 
    
    ?>
<tr id="w1-filters" class="filters">
    <td><?php echo $counter; $counter++ ?> </td>
    <td> <?php  echo $post->student_id   ?></td>
    <td><?php  echo $post->Hostel_no   ?></td>
    <td><?php  echo $post->Room_no   ?></td>

</tr>

<?php } ?>

</tbody>

</table>
</div></div>	</div>
      </div>
   </div>
</div>
    </section>

 <?php

include_once("php_includes/footer.php");

 ?>

</aside>


	
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$("a.toggle-column").on("click", function(e) {
    e.preventDefault();
    $.post($(this).attr("href"), function(data) {
        var pjaxId = $(e.target).closest(".grid-view").parent().attr("id");
        $.pjax.reload({container:"#" + pjaxId});
    });
    return false;
});
jQuery('#w1').yiiGridView({"filterUrl":"/CMS/index.php?r=dashboard%2Fmsg-of-day%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>
