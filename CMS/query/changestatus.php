<?php
$status=$_GET['status'];



header('Location: ../index.php?controller=admin&action=change_status&status= "'.$status.'"');
?>