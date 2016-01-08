<?php
if(isset($_POST['submit'])){
echo "submitted";
}else echo "Not sub,itted";

$B2=$_POST['B2'];
$B3=$_POST['B3'];

?>
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
$objPHPExcel->getActiveSheet()->setCellValue('B2',$B2);
$objPHPExcel->getActiveSheet()->setCellValue('B3',$B3);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('Time.xlsx');



?>

