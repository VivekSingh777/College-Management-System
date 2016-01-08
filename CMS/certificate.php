<?php 

include_once("php_includes/common_frame_s.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_student_column.php");
?>
        <aside class="right-side">

      

    <section style="min-height: 573px;" class="content">

             <div class="col-xs-12">
             <div class="col-lg-6 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Student Request For
                  Certificates</h3>
             </div>
             </div>



    <div class="stu-master-create">
    <style>
               .box .box-solid {
                background-color: #F8F8F8;
                }
    </style>

<!--<script>
$(function () {
  $('[data-toggle="popover"]').popover({placement: function() { return $(window).width() < 768 ? 'bottom' : 'right'; }})
})
</script>-->


   <div class="col-xs-12 col-lg-12">
   <div class="box-success box view-item col-xs-12 col-lg-12">
   <div class="stu-master-form">
              <p class="note">Fields with <span class="required"> <b style="color:red;">*</b></span> are required.</p>




      <form id="stu-master-form" onsubmit="return Form()" action="certificate_request.php" method="post" >


<input type="hidden" name="id" value="<?php echo $_SESSION['userid'] ?>" >

<!--<input name="_csrf" value="Z29ncDZCWDFTOjY0Ry9tASw2Fz1vOGF6JTkkFAIoD2g.HQQ7VBIbdQ==" type="hidden"> -->   
  
              <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
                   <div class="box-header with-border">
                     <h4> Personal Details</h4>
                   </div>

                <div class="box-body">
                    <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                      <div class="col-xs-9 col-sm-4">
		        <div class="form-group field-stuinfo-stu_unique_id required">
                            
                </div>         
                </div>








                 <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
	            <div class="col-xs-12 col-sm-4 col-lg-4">
		             <div class="form-group field-stuinfo-stu_title">
                                 <div class="form-group field-stuinfo-stu_unique_id required">
                                      <label class="control-label" for="stuinfo-stu_title">Certificate Subject</label>
                                      <select class="form-control" name="emp_address" required>
                                         <option selected="selected" value="" name="">--- Select Subject ---</option>
                                         <option value="Bonafide_certificate">Bonafide Certificate</option>
                                         <option value="Hostel_Resident_certificate">Hostel Resident Certificate</option>
                                         <option value="Fee_Reciept_certificate">Fee Reciept Certificate</option>
                                      </select>
                                    <div class="help-block"></div>
                                 </div>	
                             </div>	
                   </div>
             </div>




                  <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                  <div class="col-xs-9 col-sm-4">
    <div class="form-group field-stuinfo-stu_unique_id required">
<label class="control-label" for="stuinfo-stu_unique_id">Purpose Of Certificate</label><input type="text" id="emp_name" class="form-control" name="emp_name" value="16"><div class="help-block"></div>
</div>    </div> 

                   </div>
      


 


             



    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <input class="btn btn-block btn-success" name="add" type="submit" id="add"> </div>
	<div class="col-xs-6">
	    <a class="btn btn-block btn-warning" href="certificate.php">Cancel</a>	</div>
    </div>
<div class="col-xs-2">
	    <a class="btn btn-block btn-danger" href="show.php">List of Request</a>	</div>
    </div>

    </form> 

  </div>
  </div>
</div>
</div>
    </section>

    </body></html>
