<html>
<head>
<title> Time Table</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script>
function hello(){

	alert("hello");
}
</script>
<head>
<body>
<?php
require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'Time.xlsx';

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();

//$cell1 = $sheet->getCellByColumnAndRow('B', '2');
//$cell2 = $sheet->getCellByColumnAndRow('B', '3');
//$objPHPExcel->getActiveSheet()->setCellValue('B6', "Hello, World!");
//echo $cell1;
$cell1 = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$cell2 = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
echo $cell1;
//  Loop through each row of the worksheet in turn
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//$objWriter->save('Time.xlsx');
?>

<table class="table table-striped table-bordered">
<tr>
<th>Indian Institute of Information technology</th>
</tr>
<tr>
<td>Monday</td>
<td><?php echo $cell1 ?></td>
</tr>
<tr>
<td>Tuesday</td>
<td><?php echo $cell2 ?></td>
</tr>

</table>
<form  method="post" action="time.php">
 <input class="btn btn-block btn-success" type="submit" name="submit" value="Update" >
</form>	
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	

</body>

</html>