
<?php
include_once("php_includes/common_frame_s.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_student_column.php");


   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $sid = $_SESSION['userid'];
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT DISTINCT sid,cid,request_type,purpose,request_date,status FROM certificate JOIN student_certificate_requests ON certificate.cid=student_certificate_requests.c_id WHERE sid='".$sid."'";
   mysql_select_db('cms');
   
    ?>

        <aside class="right-side">

        <ul class="breadcrumb">
          <li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
 <li><a href="certificate.php"><i class="fa fa-dashboard"></i> Certificate Request </a></li>

<li class="active">Certificate Request</li>
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
<tr><th>#</th><th><a href="#">Description</a></th><th><a href="#">Type</a></th><th><a href="#">SID</a></th><th><a>Apply Date</a></th><th><a>Status</a></th></tr>
</thead>
<tbody>



  <?php
  $retval = mysql_query( $sql, $conn );
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {

       
 ?>


<tr>
    <td id="<?php  echo $row['cid']; ?>"><?php  echo $row['cid']; ?></td>
    <td id="<?php   echo $row['cid'].'r'; ?>"> <?php  echo $row['request_type'];  ?></td>
    <td id="<?php   echo $row['cid'].'p'; ?>"><?php  echo $row['purpose'];  ?></td>
    <td id="<?php   echo $row['cid'].'s'; ?>"> <?php  echo $row['sid'];  ?></td>
    <td id="<?php   echo $row['cid'].'rd'; ?>"><?php  echo $row['request_date'];  ?></td>
    <td id="<?php   echo $row['cid'].'rd'; ?>"><?php  echo $row['status'];  ?></td>
  
<?php echo"Error ";  ?>
</tr>
<?php 
} 

 mysql_close($conn);
?>


</tbody></table>
</div></div>	</div>
      </div>
   </div>
</div>
    </section>

    <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 3.0 -->
        </div>
        <strong>Copyright © 2015 <a >Team 3</a>.</strong> All rights reserved.
      </div>
    </footer>

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

