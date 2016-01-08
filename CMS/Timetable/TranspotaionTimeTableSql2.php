<?php

$Sl1=$_POST['Sl1'];
$Sl2=$_POST['Sl2'];
$Sl3=$_POST['Sl3'];
$Sl4=$_POST['Sl4'];
$Sl5=$_POST['Sl5'];
$Sl6=$_POST['Sl6'];
$Sl7=$_POST['Sl7'];
$Sl8=$_POST['Sl8'];
$Sl9=$_POST['Sl9'];
$S20=$_POST['S20'];
$S21=$_POST['S21'];
$S22=$_POST['S22'];
$S23=$_POST['S23'];
$S24=$_POST['S24'];
$S25=$_POST['S25'];
$S26=$_POST['S26'];

$Sl1B=$_POST['Sl1B'];
$Sl1F=$_POST['Sl1F'];
$Sl1D=$_POST['Sl1D'];

$Sl2B=$_POST['Sl2B'];
$Sl2F=$_POST['Sl2F'];
$Sl2D=$_POST['Sl2D'];

$Sl3B=$_POST['Sl3B'];
$Sl3F=$_POST['Sl3F'];
$Sl3D=$_POST['Sl3D'];

$Sl4B=$_POST['Sl4B'];
$Sl4F=$_POST['Sl4F'];
$Sl4D=$_POST['Sl4D'];

$Sl5B=$_POST['Sl5B'];
$Sl5F=$_POST['Sl5F'];
$Sl5D=$_POST['Sl5D'];

$Sl6B=$_POST['Sl6B'];
$Sl6F=$_POST['Sl6F'];
$Sl6D=$_POST['Sl6D'];

$Sl7B=$_POST['Sl7B'];
$Sl7F=$_POST['Sl7F'];
$Sl7D=$_POST['Sl7D'];

$Sl8B=$_POST['Sl8B'];
$Sl8F=$_POST['Sl8F'];
$Sl8D=$_POST['Sl8D'];

$Sl9B=$_POST['Sl9B'];
$Sl9F=$_POST['Sl9F'];
$Sl9D=$_POST['Sl9D'];

$S20B=$_POST['S20B'];
$S20F=$_POST['S20F'];
$S20D=$_POST['S20D'];

$S21B=$_POST['S21B'];
$S21F=$_POST['S21F'];
$S21D=$_POST['S21D'];

$S22B=$_POST['S22B'];
$S22F=$_POST['S22F'];
$S22D=$_POST['S22D'];

$S23B=$_POST['S23B'];
$S23F=$_POST['S23F'];
$S23D=$_POST['S23D'];

$S24B=$_POST['S24B'];
$S24F=$_POST['S24F'];
$S24D=$_POST['S24D'];

$S25B=$_POST['S25B'];
$S25F=$_POST['S25F'];
$S25D=$_POST['S25D'];

$S26B=$_POST['S26B'];
$S26F=$_POST['S26F'];
$S26D=$_POST['S26D'];

require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'TranspotaionTimeTable.xlsx';

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

$sheet = $objPHPExcel->getSheet(0); 
$objPHPExcel->getActiveSheet()->setCellValue('A5',$Sl1);
$objPHPExcel->getActiveSheet()->setCellValue('A6',$Sl2);
$objPHPExcel->getActiveSheet()->setCellValue('A7',$Sl3);
$objPHPExcel->getActiveSheet()->setCellValue('A8',$Sl4);
$objPHPExcel->getActiveSheet()->setCellValue('A9',$Sl5);
$objPHPExcel->getActiveSheet()->setCellValue('A10',$Sl6);
$objPHPExcel->getActiveSheet()->setCellValue('A11',$Sl7);
$objPHPExcel->getActiveSheet()->setCellValue('A12',$Sl8);
$objPHPExcel->getActiveSheet()->setCellValue('A13',$Sl9);
$objPHPExcel->getActiveSheet()->setCellValue('A14',$S20);
$objPHPExcel->getActiveSheet()->setCellValue('A15',$S21);
$objPHPExcel->getActiveSheet()->setCellValue('A16',$S22);
$objPHPExcel->getActiveSheet()->setCellValue('A17',$S23);
$objPHPExcel->getActiveSheet()->setCellValue('A18',$S24);
$objPHPExcel->getActiveSheet()->setCellValue('A19',$S25);
$objPHPExcel->getActiveSheet()->setCellValue('A20',$S26);

$objPHPExcel->getActiveSheet()->setCellValue('B5',$Sl1B);
$objPHPExcel->getActiveSheet()->setCellValue('B6',$Sl2B);
$objPHPExcel->getActiveSheet()->setCellValue('B7',$Sl3B);
$objPHPExcel->getActiveSheet()->setCellValue('B8',$Sl4B);
$objPHPExcel->getActiveSheet()->setCellValue('B9',$Sl5B);
$objPHPExcel->getActiveSheet()->setCellValue('B10',$Sl6B);
$objPHPExcel->getActiveSheet()->setCellValue('B11',$Sl7B);
$objPHPExcel->getActiveSheet()->setCellValue('B12',$Sl8B);
$objPHPExcel->getActiveSheet()->setCellValue('B13',$Sl9B);
$objPHPExcel->getActiveSheet()->setCellValue('B14',$S20B);
$objPHPExcel->getActiveSheet()->setCellValue('B15',$S2lB);
$objPHPExcel->getActiveSheet()->setCellValue('B16',$S22B);
$objPHPExcel->getActiveSheet()->setCellValue('B17',$S23B);
$objPHPExcel->getActiveSheet()->setCellValue('B18',$S24B);
$objPHPExcel->getActiveSheet()->setCellValue('B19',$S25B);
$objPHPExcel->getActiveSheet()->setCellValue('B20',$S26B);

$objPHPExcel->getActiveSheet()->setCellValue('F5',$Sl1F);
$objPHPExcel->getActiveSheet()->setCellValue('F6',$Sl2F);
$objPHPExcel->getActiveSheet()->setCellValue('F7',$Sl3F);
$objPHPExcel->getActiveSheet()->setCellValue('F8',$Sl4F);
$objPHPExcel->getActiveSheet()->setCellValue('F9',$Sl5F);
$objPHPExcel->getActiveSheet()->setCellValue('F10',$Sl6F);
$objPHPExcel->getActiveSheet()->setCellValue('F11',$Sl7F);
$objPHPExcel->getActiveSheet()->setCellValue('F12',$Sl8F);
$objPHPExcel->getActiveSheet()->setCellValue('F13',$Sl9F);
$objPHPExcel->getActiveSheet()->setCellValue('F14',$S20F);
$objPHPExcel->getActiveSheet()->setCellValue('F15',$S2lF);
$objPHPExcel->getActiveSheet()->setCellValue('F16',$S22F);
$objPHPExcel->getActiveSheet()->setCellValue('F17',$S23F);
$objPHPExcel->getActiveSheet()->setCellValue('F18',$S24F);
$objPHPExcel->getActiveSheet()->setCellValue('F19',$S25F);
$objPHPExcel->getActiveSheet()->setCellValue('F20',$S26F);

$objPHPExcel->getActiveSheet()->setCellValue('D5',$Sl1D);
$objPHPExcel->getActiveSheet()->setCellValue('D6',$Sl2D);
$objPHPExcel->getActiveSheet()->setCellValue('D7',$Sl3D);
$objPHPExcel->getActiveSheet()->setCellValue('D8',$Sl4D);
$objPHPExcel->getActiveSheet()->setCellValue('D9',$Sl5D);
$objPHPExcel->getActiveSheet()->setCellValue('D10',$Sl6D);
$objPHPExcel->getActiveSheet()->setCellValue('D11',$Sl7D);
$objPHPExcel->getActiveSheet()->setCellValue('D12',$Sl8D);
$objPHPExcel->getActiveSheet()->setCellValue('D13',$Sl9D);
$objPHPExcel->getActiveSheet()->setCellValue('D14',$S20D);
$objPHPExcel->getActiveSheet()->setCellValue('D15',$S2lD);
$objPHPExcel->getActiveSheet()->setCellValue('D16',$S22D);
$objPHPExcel->getActiveSheet()->setCellValue('D17',$S23D);
$objPHPExcel->getActiveSheet()->setCellValue('D18',$S24D);
$objPHPExcel->getActiveSheet()->setCellValue('D19',$S25D);
$objPHPExcel->getActiveSheet()->setCellValue('D20',$S26D);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('TranspotaionTimeTable.xlsx');
header('Location: TranspotationTimeTable.php');

?>