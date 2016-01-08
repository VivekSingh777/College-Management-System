<?php 

$id = "";
//include_once("php_includes/db_conx.php");
include_once("php_includes/check_login_status.php");
$acadyear = $_GET['acadyear'];
$fid = $_GET['fid'];
//$fid="111";
//$acadyear="2015";
$season = $_GET['season'];
//$season='Autumn';
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
$query = "Select course_id from semester natural join (SELECT * from course_faculty natural join semester_courses) as some WHERE fid='".$fid."' and acadyear='".$acadyear."' and season='".$season."'";
//$query = "Select course_id from semester natural join (SELECT * from course_faculty natural join semester_courses) as some WHERE fid='123' and acadyear='2015' and season='Autumn'";
$rs = mysql_query($query);
?><select><option disabled selected>Subject</option>
<?php 
while($row = mysql_fetch_array($rs)) {
  $id = $row['course_id'];
  echo "<option value='". $id . "'>".$id."</option>";
 }
?></select>

<?php ?>
