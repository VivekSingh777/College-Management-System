<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="http://localhost:8081/CMS/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Fees</li>
<li class="active">Student Fees Data</li>
</ul>

    <section class="content">
        <!--div class="table-responsive"-->
<!-----Start Display Block Of Student Details----->
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-8 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-inr"></i> Student Fees Data</h3></div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
  <div class="box-success box col-xs-12 col-lg-12 no-padding">
   <div class="box-header with-border">
	<h3 class="box-title"><i class="fa fa-user"></i><sub><i class="fa fa-info-circle"></i></sub> Student Details</h3>
   </div>
   <div class="box-body no-padding"> 
    <table class="table detail-view">
	<colgroup><col class="col-sm-2">
  	<col class="col-sm-2">
	<col class="col-sm-8">
         
	</colgroup><tbody><tr class="visible-xs text-center">
		<td colspan="2"><img class="img-circle edusec-img-disp" src="Student%20Fees%20Data_files/no-photo.png" alt="No Image"></td>
	</tr>
	<tr>
		<td rowspan="5" class="hidden-xs"><img class="img-circle edusec-img-disp" src="Student%20Fees%20Data_files/no-photo.png" alt="No Image"></td>
		<th>Name</th>
		<td>Nash Kabunda</td>
	</tr>
	<tr>
		<th>Course</th>
		<td>M.Sc.IT</td>
	</tr>
	<tr>
		<th>Batch</th>
		<td>MSCIT-Batch-01</td>
	</tr>
	<tr>
		<th>Section</th>
		<td>MSCIT-Sectio-01</td>
	</tr>
	<tr>
		<th>Student Status</th>
		<td>Regular</td>
	</tr>
     </tbody></table>
    </div>
  </div>
</div>

<!-----End Display Block Of Student Details----->

<!-----Start current batch fees details----->

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box box-info col-xs-12 col-lg-12 no-padding">
    <div class="box-header with-border"><h4 class="box-title"><i class="fa fa-inr"></i> Current Fees Details</h4></div>
    <div class="box-body table-responsive">
<div id="w0" class="grid-view"><table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th>Name</th><th>Description</th><th>Start Date</th><th>End Date</th><th>Due Date</th><th>Fees Details</th><th>Total Amount</th><th>Total Paid Fees</th></tr>
</thead>
<tbody>
<tr data-key="3"><td>1</td><td>Tuition Fees</td><td>Tuition Fees</td><td>01-06-2015</td><td>30-06-2015</td><td>01-07-2015</td><td><ol><li>Tuition Fees-2015 (25000) </li></ol></td><td>25000</td><td>22000</td></tr>
</tbody></table>
</div>    </div>
  </div>
</div>
<!-----End current batch fees details----->

<!-----Start student payment history block----->
<div class="col-xs-12" style="padding-top: 10px;">
    <div class="box box-info col-xs-12 col-lg-12 no-padding">
     <div class="box-header with-border">
	<h3 class="box-title"><i class="fa fa-inr"></i><sup><i class="fa fa-clock-o"></i></sup> Student Payment History</h3>
     </div>
     <div class="box-body table-responsive">
<div id="w1" class="grid-view"><div class="summary">Showing <b>1-2</b> of <b>2</b> items.</div>
<table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th><a class="desc" href="http://localhost:8081/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data&amp;sort=fees_pay_tran_id" data-sort="fees_pay_tran_id">Receipt No.</a></th><th><a href="http://localhost:8081/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data&amp;sort=fees_pay_tran_date" data-sort="fees_pay_tran_date">Payment Date</a></th><th><a href="http://localhost:8081/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data&amp;sort=fees_pay_tran_collect_id" data-sort="fees_pay_tran_collect_id">Fees Collect Name</a></th><th><a href="http://localhost:8081/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data&amp;sort=fees_pay_tran_mode" data-sort="fees_pay_tran_mode">Payment Mode</a></th><th><a href="http://localhost:8081/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data&amp;sort=fees_pay_tran_cheque_no" data-sort="fees_pay_tran_cheque_no">Cheque No</a></th><th><a href="http://localhost:8081/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data&amp;sort=fees_pay_tran_amount" data-sort="fees_pay_tran_amount">Amount</a></th></tr>
</thead>
<tbody>
<tr data-key="15"><td>1</td><td>15</td><td>30-05-2015</td><td>Tuition Fees</td><td>Cheque</td><td>1236</td><td>2000</td></tr>
<tr data-key="14"><td>2</td><td>14</td><td>28-05-2015</td><td>Tuition Fees</td><td>Cash</td><td>-</td><td>20000</td></tr>
</tbody></table>
</div>     </div>
  </div>
</div>
<!-----End student payment history block----->

<!--/div--><!---End table-responsive div tag--->
    </section>

    <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 3.0 -->
        </div>
        <strong>Copyright © 2015 <a href="http://www.rudrasoftech.com/">Rudra Softech</a>.</strong> All rights reserved.
      </div>
    </footer>

</aside>


	
      </div>
    <script src="Student%20Fees%20Data_files/yii_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w0').yiiGridView({"filterUrl":"/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data","filterSelector":"#w0-filters input, #w0-filters select"});
jQuery('#w1').yiiGridView({"filterUrl":"/CMS/index.php?r=fees%2Ffees-payment-transaction%2Fstu-fees-data","filterSelector":"#w1-filters input, #w1-filters select"});
});</script>    
    
    </body></html>