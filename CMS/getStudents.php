
<?php 

$id = "";
include_once("php_includes/db_conx.php");
$acadyear = $_GET['acadyear'];
$course_id = $_GET['course_id'];
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
$query = "SELECT sid FROM student_enrolls_course WHERE acadyear='".$acadyear."' and course_id='".$course_id."'";
$rs = mysql_query($query);
?>






<div id="w1" class="grid-view">
<form method="get" action="" onsubmit="return false;">
<table class="table table-striped table-bordered"><thead>
<tr><th><a href="#">StudentID</a></th><th><a href="#">Grade</a></th><th><a href="#">Upload</a></th><th><a href="#">Change Grade</a></th><th><a href="#">Notification</a></th></tr>

   
<?php 
while($row = mysql_fetch_array($rs)) {
  $id = $row['sid'];?>

<tbody>

<tr>


<td><div id="<?php echo $id. 'c'; ?>"><?php echo $id ?></td>
<td>
<select id="<?php echo $id.'g' ?>" class="form-control" value="grades" name="<?php echo $id.'g' ?>">
<option value="AA">AA</option>
<option value="AB">AB</option>
<option value="BB">BB</option>
<option value="BC">BC</option>
<option value="CC">CC</option>
<option value="CD">CD</option>
<option value="DD">DD</option>
<option value="DE">DE</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="I">I</option>
</select>
</td>
<td><input name="add" class="btn btn-block btn-primary" type="button" id="add" value="upload" onclick="submitGrade(<?php echo $id ?>)"></td>
<td><input name="add1" class="btn btn-block btn-primary" type="button" id="add1" value="change" onclick="changeGrade(<?php echo $id ?>)"></td>	
<td><span style="word-wrap:break-word;" id="<?php echo $id ?>"></span></td>
</div>
</tbody></table></div></div>
<!--<input type="button" value="Submit" onclick="submitGrade();">-->
<?php echo "<br>";
 }
?>


