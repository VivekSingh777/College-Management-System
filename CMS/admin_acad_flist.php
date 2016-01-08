<?php

include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="admin_acad_profile.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="admin_acad_dash.php">Academic</a></li>
<li class="active">Faculty Record</li>
</ul>

    <section class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> View Faculty</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
   <div class="col-xs-5 col-md-offset-6 left-padding">
              <a class="btn btn-block btn-success" href="admin_acad_addf.php">ADD</a>   </div>
 </div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
    <div class="stu-master-index">
        <div id="w0">       <div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th>Faculty ID</th><th>First Name</th><th>Last Name</th></tr>
</thead>

<tbody>

<?php

  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("cms",$conn);
//  session_start();
 
  //Check whether the session variable SESS_MEMBER_ID is present or not
  //if(!isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
  //header("location: index.php");
  //exit();
//}
  $url="";
?> 

<!-- SQL query goes here -->
<?php 
$strSQL = "SELECT fid, firstname, lastname FROM faculty";
  $rs = mysql_query($strSQL);
 $counter=1; 
 while($row = mysql_fetch_array($rs)) {
  $id = $row['fid'];
  $name= $row['firstname'];
  $lastname=$row['lastname'];
  $url = "Admin_acad_showf.php?fid=".$id;?>
  <tr id="w1-filters" class="filters">
    <td> <?php  echo $counter++;   ?></td>
    <td><a href=<?php echo $url ?>><?php  echo $id   ?><a/></td>
    <td><?php  echo $name   ?></td>
    <td><?php  echo $lastname   ?></td>
</tr>
<?php }
?>

<!--    save input here  -->

</tbody>
</table>
</div>  </div>      </div>
      </div>
    </div>
</div>
    </section>

    
<?php

include_once("php_includes/footer.php");

 ?>

</aside>

	
      </div>
    <script src="js1/yii_002.js"></script>
<script src="js1/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w1').yiiGridView({"filterUrl":"/edusec/index.php?r=student%2Fstu-master%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>