<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT distinct sid,cid,request_type,purpose,request_date,status FROM certificate JOIN student_certificate_requests on certificate.cid=student_certificate_requests.c_id WHERE status='Pending'";
   mysql_select_db('cms');
   $retval = mysql_query( $sql, $conn );
    ?>
﻿<?php

include_once("php_includes/check_login_status.php");
//$id=$_SESSION['userid'];
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="?controller=admin&action=mess_module">Academic</a></li>
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

<script>
function ajax(cid,sid,status){	

	alert("Hello1");

	var cidd = document.getElementById(cid).innerHTML;
alert(cidd);
	var sidd = document.getElementById(sid).innerHTML;
	alert("Hello3");
	var stat = document.getElementById(status).value;	
	alert("Hello4");
	var xml = new XMLHttpRequest();
	alert("Hello5");
	//alert("Hello2");
alert("status_certificate.php?cid="+ cidd +"&sid="+ sidd + "&status="+ stat);
	//alert("getStudents.php?acadyear="+ acadyear +"&course_id="+course_id);	

	xml.onreadystatechange = function getInfo(){
alert("Hello6");
	alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){
alert("Hello7");
	//alert("Hello3");
		
	var response = xml.responseText;
alert("Hello8");
	alert("Response" + response);	

	//document.getElementById("student_list").innerHTML=response;
	
	}
	
	};

	xml.open("GET","status_certificate.php?cid="+ cidd +"&sid="+ sidd + "&status="+ stat ,true);
alert("Hello9");
	xml.send();
	alert("Hello10");
}
</script>



<div id="w1" class="grid-view">

<table class="table table-striped table-bordered"><thead>
<tr><th><a href="#">CID</a></th><th><a href="#">Description</a></th><th><a href="#">Certificate Type</a></th><th><a href="#">SID</a></th><th><a>Apply Date</a></th><th><a>Action</a></th><th><a>Confirm</a></th><th><a href="#">Status</a></th></tr>
<tbody>

<?php

   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {

       
 ?>

<form method="get" action="query.php"  >
<tr>
    
    
    <td id="<?php echo $row['cid']; ?>"><?php  echo $row['cid']; ?></td>
    <td id="<?php echo $row['cid'].'r'; ?>"> <?php  echo $row['request_type'];  ?></td>
    <td id="<?php echo $row['cid'].'p'; ?>"><?php  echo $row['purpose'];  ?></td>
    <td id="<?php echo $row['cid'].'s'; ?>"> <?php  echo $row['sid'];  ?></td>
    <td id="<?php echo $row['cid'].'rd'; ?>"><?php  echo $row['request_date'];  ?></td>
    
<input type="hidden" name="cid" value= "<?php echo $row['cid']; ?>">
    
    <td>
        <select class="form-control" name="status">

<option value="">---change---</option>
<option value="Accepted">accept</option>
<option value="Rejected">reject</option>
</select>

</td>
<td>

    <input class="btn btn-block btn-info" type="submit" value="Done" ></td>


<td id="<?php echo $row['cid'].'rd'; ?>"><?php  echo $row['status'];  ?></td>
</tr>
</form>
<?php 
} 

 mysql_close($conn);
?>


</tbody></table></form>
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
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>
