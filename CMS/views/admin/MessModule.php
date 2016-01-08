<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>

<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);

$user="admin";
$strSQL1 = "SELECT count(*) FROM notification WHERE usr_typ = '".$user."' " ;
    $rs1 = mysql_query($strSQL1);
    $row1 = mysql_fetch_array($rs1);

?>

<script type="text/javascript">
function notify( note_id1) {
//alert(note_id);    
<?php
//alert(note_id1);
$sql2=" UPDATE notification 
 SET status ='Active' WHERE note_id = note_id1 ";
$rss = mysql_query($sql2);
?>
}
</script>
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning"><?php echo $row1['count(*)'] ; ?></span>
    </a>
    <ul class="dropdown-menu">
        <?php  
        if($row1['count(*)']==0){

        ?>
        <li class="header" >You have no notification</li>
        <?php  
}else{

$strSQL = "SELECT * FROM notification WHERE usr_typ = '".$user."' ";
    $rs = mysql_query($strSQL);


        $notification_list = "";
         while($row = mysql_fetch_array($rs)) {

         ?>
        <li class="header"><a id="note" onclick=notify(<?php echo $row['note_id']  ?>) href=<?php echo $row['app']; ?> ><?php echo $row['note'];  ?></a></li>
	    
        
        <?php } 

        } ?>

        </ul>
</li>


        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Mess Module</li>
</ul>

    <section class="content">
        

<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-graduation-cap"></i> Mess Module</h3>
	</div>
	<div class="box-body">

	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-yellow"><i class="fa fa-graduation-cap"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="?controller=admin&action=rebate_status">Rebate Status</a></span>
		          
		        </div><!-- /.info-box-content -->
		      </div><!-- /.info-box -->
		</div>

	

<?php

include_once("php_includes/footer.php");

 ?>

    </body></html>