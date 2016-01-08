<?php include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");
?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Student</a></li>
<li class="active">Manage Students</li>
</ul>

    <section class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> Manage Students</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
	            <a class="btn btn-block btn-success" href="index.php?r=student%2Fstu-master%2Fcreate">ADD</a>		</div>
	<div class="col-xs-4 left-padding">
		<a class="btn btn-block btn-warning" href="index.php?r=export-data%2Fexport-to-pdf&amp;model=app%5Cmodules%5Cstudent%5Cmodels%5CStuMasterSearch" target="_blank">PDF</a>		</div>
	
</div>
<!--  insert data here     -->
<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="stu-master-index">
		<div id="w0">	    <div id="w1" class="grid-view">
<table class="table table-striped table-bordered">
    <thead>
<tr><th>#</th><th>Student ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    
    <th>Batch</th>
    <th>Course</a></th>
   
</tr>
<?php   $counter=0; ?>
<!--    save input here  -->
<?php foreach($posts as $post) { 
    
    ?>
<tr id="w1-filters" class="filters">
    <td><?php echo $counter; $counter++ ?> </td>
    <td> <?php  echo $post->student_id   ?></td>
    <td><?php  echo $post->firstname   ?></td>
    <td><?php  echo $post->lastname   ?></td>

<td><?php  echo $post->batch  ?></td>
<td><?php  echo $post->branch  ?></td>

</tr>

<?php } ?>

</table>




</div>	</div>   	</div>
      </div>
    </div>
</div>
    </section>
<?php

include_once("php_includes/footer.php");

 ?>

</aside>


	
      </div>
    <script src="Manage%20Students_files/yii_002.js"></script>
<script src="Manage%20Students_files/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w1').yiiGridView({"filterUrl":"/CMS/index.php?r=student%2Fstu-master%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>