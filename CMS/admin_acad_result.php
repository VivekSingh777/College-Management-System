<?php 
include_once("php_includes/common_frame_a.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_admin_column.php");


?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="/edusec/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        </ul>

    <section class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i>Select Student ID</h3></div>
  <div class="col-xs-4"></div>
</div>

<script type="text/javascript">

function getstuds(){

  var batch= document.getElementById("batch").value;
  var xhr;
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange= function getInfo(){

    if(xhr.readyState == 4 && xhr.status == 200){
    var response = xhr.responseText;
    //alert("response:" + response);

    if(response == "failure"){

      window.location = "admin_acad_result.php";

  }else{

      //alert("Success");
      document.getElementById("tbody").innerHTML = response;

  }

}

}; 

xhr.open("GET","getStudentDetails.php?batch=" + batch, true);
xhr.send();
}

</script>

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form id="stu-master-form" action="/readyMadeCode/eduSec/index.php?r=student%2Fstu-master%2Fcreate" method="post">
<input type="hidden" name="_csrf" value="NHBnY0dyWktnPD8oLyEJHQxdBCkjNmonZ0hXAHEzKxplIg0GMUEbBQ==">    
  <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">   
<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
  <div class="stu-master-index">
    <div id="w0">     <div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>
BATCH
</th></tr>
<tr id="w1-filters" class="filters">
<td><select class="form-control" id="batch" name="batch" onchange="getstuds();">
<option value="" disabled selected>Choose Batch</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2021">2022</option>
<option value="2021">2023</option>
</select></td>
</tr>
</thead>
</table>
</div>  </div>    </div>
      </div>
    </div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
    <div class="stu-master-index">
        <div id="w0">       <div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th>Student ID</th><th>First Name</th><th>Last Name</th></tr>
</thead>

<tbody id="tbody">


<!--    save input here  -->

</tbody>
</table>
</div>  </div>      </div>
      </div>
    </div>
   </form>
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
jQuery('#w1').yiiGridView({"filterUrl":"/edusec/index.php?r=student%2Fstu-master%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>