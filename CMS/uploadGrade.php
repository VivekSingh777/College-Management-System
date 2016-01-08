<?php

include_once("php_includes/common_frame_f.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_faculty_column.php");
?>
<script type="text/javascript">
	function getCourses(){	

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').innerHTML;

	var season = document.getElementById('season').value;
	
	var id = document.getElementById('id').innerHTML;

	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getCourses.php?acadyear="+ acadyear +"&season="+season+"&fid=" +id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	//alert("Hello3");
		
	var response = xml.responseText;

	//alert("Response" + response);	

	document.getElementById("courseId").innerHTML=response;
	
	}
	
	};

	xml.open("GET","getCourses.php?acadyear="+ acadyear +"&season="+season+"&fid="+id,true);
	
	xml.send();
	
}

function getStudents(){	

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').innerHTML;

	var course_id = document.getElementById('courseId').value;
	
	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getStudents.php?acadyear="+ acadyear +"&course_id="+course_id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	//alert("Hello3");
		
	var response = xml.responseText;

	//alert("Response" + response);	

	document.getElementById("student_list").innerHTML=response;
	
	}
	
	};

	xml.open("GET","getStudents.php?acadyear="+ acadyear +"&course_id="+course_id,true);
	xml.send();
	
}





function changeGrade(str){

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').innerHTML;

	var course_id = document.getElementById('courseId').value;
	
	var grade = document.getElementById(str + "g").value;

	var sid = str;

	var courseId = document.getElementById("courseId").value;

	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getStudents.php?acadyear="+ acadyear +"&course_id="+course_id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	var rrr = parseInt(xml.responseText);

        if(rrr==1){
	//alert(rrr);
	document.getElementById(sid).innerHTML="Grade changed";		
	
	document.getElementById(sid).style.color = "green";
	
	}else{

	document.getElementById(sid).innerHTML="You have already changed grade to this student";

	document.getElementById(sid).style.color = "red";	
	
	
	}
	}
	
	};

	xml.open("GET","change_grade.php?sid="+ sid +"&grade="+grade + "&cid=" + courseId,true);
	xml.send();
	
}









function submitGrade(str){

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').innerHTML;

	var course_id = document.getElementById('courseId').value;
	
	var grade = document.getElementById(str + "g").value;

	var sid = str;

	var courseId = document.getElementById("courseId").value;

	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getStudents.php?acadyear="+ acadyear +"&course_id="+course_id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	var rrr = parseInt(xml.responseText);

	if(rrr==1){
	
	document.getElementById(sid).innerHTML="Grade uploaded";		
	
	document.getElementById(sid).style.color = "green";
	
	}else{

	
	document.getElementById(sid).innerHTML="Already graded";

	document.getElementById(sid).style.color = "red";	
	
	
	}
	}
	
	};

	xml.open("GET","submit_grade.php?sid="+ sid +"&grade="+grade + "&cid=" + courseId,true);
	xml.send();
	
}



</script>


<script src="Manage%20Students_files/bootstrapx-clickover.js"></script>    </head>
    <body style="min-height: 1161px;" class="skin-black  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    	
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="http://localhost/cms1/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="http://localhost/cms1/index.php?r=student%2Fdefault%2Findex">Faculty</a></li>
<li class="active">Upload Grade</li>
</ul>

    <section style="min-height: 573px;" class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><!--<i class="fa fa-th-list"></i>-->Upload Grade</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	
	<!--<div class="col-xs-4 left-padding">
		<a class="btn btn-block btn-primary" href="http://localhost/cms1/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cstudent%5Cmodels%5CStuMasterSearch" target="_blank">EXCEL</a>		</div> -->
  </div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="stu-master-index">
		<div id="w0">	    <div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
	
<tr><th>Acadyear</th><th>
Season
</th>
<th>Course ID</th></tr>

<tr id="w1-filters" class="filters"><!--<td>&nbsp;</td>--><!--<td><input class="form-control" name="StuMasterSearch[stu_unique_id]" type="text"></td>--><!--<td><input class="form-control" name="StuMasterSearch[stu_first_name]" type="text"></td><td><input class="form-control" name="StuMasterSearch[stu_last_name]" type="text"></td>-->

<td>

<span id="acadyear"></span>
</td>

<td><select class="form-control" id="season" name="season" onchange="getCourses();">
<option value="" disabled selected>Choose Season</option>
<option value="Autumn">Autumn</option>
<option value="Winter">Winter</option>

</select></td>

 `

<td><select class="form-control" name="courseId" id="courseId" onchange="getStudents();">


</select></td></tr>
</thead>



<tbody id="student_list">

</tbody></table>
</div>	</div>   	</div>
      </div>
    </div>
</div>
    </section>

   <?php include_once("php_includes/footer.php"); ?>

	
      
    <script src="Manage%20Students_files/yii.js"></script>
<script src="Manage%20Students_files/jquery_002.js"></script>
<script>
var d = new Date();
document.getElementById("acadyear").innerHTML = d.getFullYear();
</script>    
    
    </body></html>
