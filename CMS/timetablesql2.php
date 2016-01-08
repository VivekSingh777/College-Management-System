<?php
if(isset($_POST['edit'])){
echo "submitted";
}else echo "Not sub,itted";


$Sl1=$_POST['Sl1'];
$Sl2=$_POST['Sl2'];
$Sl3=$_POST['Sl3'];
$Sl4=$_POST['Sl4'];

$MSl1=$_POST['MSl1'];
$MSl2=$_POST['MSl2'];
$MSl3=$_POST['MSl3'];
$MSl4=$_POST['MSl4'];

$MSl1F=$_POST['MSl1F'];
$MSl2F=$_POST['MSl2F'];
$MSl3F=$_POST['MSl3F'];
$MSl4F=$_POST['MSl4F'];

$MSl1R=$_POST['MSl1R'];
$MSl2R=$_POST['MSl2R'];
$MSl3R=$_POST['MSl3R'];
$MSl4R=$_POST['MSl4R'];

//tuesday

$TSl1=$_POST['TSl1'];
$TSl2=$_POST['TSl2'];
$TSl3=$_POST['TSl3'];
$TSl4=$_POST['TSl4'];

$TSl1F=$_POST['TSl1F'];
$TSl2F=$_POST['TSl2F'];
$TSl3F=$_POST['TSl3F'];
$TSl4F=$_POST['TSl4F'];

$TSl1R=$_POST['TSl1R'];
$TSl2R=$_POST['TSl2R'];
$TSl3R=$_POST['TSl3R'];
$TSl4R=$_POST['TSl4R'];
//WEdnesday

$WSl1F=$_POST['WSl1F'];
$WSl2F=$_POST['WSl2F'];
$WSl3F=$_POST['WSl3F'];
$WSl4F=$_POST['WSl4F'];

$WSl1=$_POST['WSl1'];
$WSl2=$_POST['WSl2'];
$WSl3=$_POST['WSl3'];
$WSl4=$_POST['WSl4'];

$WSl1R=$_POST['WSl1R'];
$WSl2R=$_POST['WSl2R'];
$WSl3R=$_POST['WSl3R'];
$WSl4R=$_POST['WSl4R'];
//Thursday
$ThSl1=$_POST['ThSl1'];
$ThSl2=$_POST['ThSl2'];
$ThSl3=$_POST['ThSl3'];
$ThSl4=$_POST['ThSl4'];

$ThSl1F=$_POST['ThSl1F'];
$ThSl2F=$_POST['ThSl2F'];
$ThSl3F=$_POST['ThSl3F'];
$ThSl4F=$_POST['ThSl4F'];

$ThSl1R=$_POST['ThSl1R'];
$ThSl2R=$_POST['ThSl2R'];
$ThSl3R=$_POST['ThSl3R'];
$ThSl4R=$_POST['ThSl4R'];

//Friday

$FSl1=$_POST['FSl1'];
$FSl2=$_POST['FSl2'];
$FSl3=$_POST['FSl3'];
$FSl4=$_POST['FSl4'];

$FSl1F=$_POST['FSl1F'];
$FSl2F=$_POST['FSl2F'];
$FSl3F=$_POST['FSl3F'];
$FSl4F=$_POST['FSl4F'];

$FSl1R=$_POST['FSl1R'];
$FSl2R=$_POST['FSl2R'];
$FSl3R=$_POST['FSl3R'];
$FSl4R=$_POST['FSl4R'];

//code here
require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'TimeTable.xlsx';

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
$objPHPExcel->getActiveSheet()->setCellValue('A5',$Sl1);
$objPHPExcel->getActiveSheet()->setCellValue('A6',$Sl2);
$objPHPExcel->getActiveSheet()->setCellValue('A7',$Sl3);
$objPHPExcel->getActiveSheet()->setCellValue('A8',$Sl4);
$objPHPExcel->getActiveSheet()->setCellValue('B5',$MSl1);
$objPHPExcel->getActiveSheet()->setCellValue('B6',$MSl2);
$objPHPExcel->getActiveSheet()->setCellValue('B7',$MSl3);
$objPHPExcel->getActiveSheet()->setCellValue('B8',$MSl4);
$objPHPExcel->getActiveSheet()->setCellValue('C5',$MSl1F);
$objPHPExcel->getActiveSheet()->setCellValue('C6',$MSl2F);
$objPHPExcel->getActiveSheet()->setCellValue('C7',$MSl3F);
$objPHPExcel->getActiveSheet()->setCellValue('C8',$MSl4F);
$objPHPExcel->getActiveSheet()->setCellValue('D5',$MSl1R);
$objPHPExcel->getActiveSheet()->setCellValue('D6',$MSl2R);
$objPHPExcel->getActiveSheet()->setCellValue('D7',$MSl3R);
$objPHPExcel->getActiveSheet()->setCellValue('D8',$MSl4R);
$objPHPExcel->getActiveSheet()->setCellValue('E5',$TSl1);
$objPHPExcel->getActiveSheet()->setCellValue('E6',$TSl2);
$objPHPExcel->getActiveSheet()->setCellValue('E7',$TSl3);
$objPHPExcel->getActiveSheet()->setCellValue('E8',$TSl4);
$objPHPExcel->getActiveSheet()->setCellValue('F5',$TSl1F);
$objPHPExcel->getActiveSheet()->setCellValue('F6',$TSl2F);
$objPHPExcel->getActiveSheet()->setCellValue('F7',$TSl3F);
$objPHPExcel->getActiveSheet()->setCellValue('F8',$TSl4F);
$objPHPExcel->getActiveSheet()->setCellValue('G5',$TSl1R);
$objPHPExcel->getActiveSheet()->setCellValue('G6',$TSl2R);
$objPHPExcel->getActiveSheet()->setCellValue('G7',$TSl3R);
$objPHPExcel->getActiveSheet()->setCellValue('G8',$TSl4R);
$objPHPExcel->getActiveSheet()->setCellValue('H5',$WSl1);
$objPHPExcel->getActiveSheet()->setCellValue('H6',$WSl2);
$objPHPExcel->getActiveSheet()->setCellValue('H7',$WSl3);
$objPHPExcel->getActiveSheet()->setCellValue('H8',$WSl4);
$objPHPExcel->getActiveSheet()->setCellValue('I5',$WSl1F);
$objPHPExcel->getActiveSheet()->setCellValue('I6',$WSl2F);
$objPHPExcel->getActiveSheet()->setCellValue('I7',$WSl3F);
$objPHPExcel->getActiveSheet()->setCellValue('I8',$WSl4F);
$objPHPExcel->getActiveSheet()->setCellValue('J5',$WSl1R);
$objPHPExcel->getActiveSheet()->setCellValue('J6',$WSl2R);
$objPHPExcel->getActiveSheet()->setCellValue('J7',$WSl3R);
$objPHPExcel->getActiveSheet()->setCellValue('J8',$WSl4R);

$objPHPExcel->getActiveSheet()->setCellValue('K5',$ThSl1);
$objPHPExcel->getActiveSheet()->setCellValue('K6',$ThSl2);
$objPHPExcel->getActiveSheet()->setCellValue('K7',$ThSl3);
$objPHPExcel->getActiveSheet()->setCellValue('K8',$ThSl4);
$objPHPExcel->getActiveSheet()->setCellValue('L5',$ThSl1F);
$objPHPExcel->getActiveSheet()->setCellValue('L6',$ThSl2F);
$objPHPExcel->getActiveSheet()->setCellValue('L7',$ThSl3F);
$objPHPExcel->getActiveSheet()->setCellValue('L8',$ThSl4F);
$objPHPExcel->getActiveSheet()->setCellValue('M5',$ThSl1R);
$objPHPExcel->getActiveSheet()->setCellValue('M6',$ThSl2R);
$objPHPExcel->getActiveSheet()->setCellValue('M7',$ThSl3R);
$objPHPExcel->getActiveSheet()->setCellValue('M8',$ThSl4R);
$objPHPExcel->getActiveSheet()->setCellValue('N5',$FSl1);
$objPHPExcel->getActiveSheet()->setCellValue('N6',$FSl2);
$objPHPExcel->getActiveSheet()->setCellValue('N7',$FSl3);
$objPHPExcel->getActiveSheet()->setCellValue('N8',$FSl4);
$objPHPExcel->getActiveSheet()->setCellValue('O5',$FSl1F);
$objPHPExcel->getActiveSheet()->setCellValue('O6',$FSl2F);
$objPHPExcel->getActiveSheet()->setCellValue('O7',$FSl3F);
$objPHPExcel->getActiveSheet()->setCellValue('O8',$FSl4F);
$objPHPExcel->getActiveSheet()->setCellValue('P5',$FSl1R);
$objPHPExcel->getActiveSheet()->setCellValue('P6',$FSl2R);
$objPHPExcel->getActiveSheet()->setCellValue('P7',$FSl3R);
$objPHPExcel->getActiveSheet()->setCellValue('P8',$FSl4R);



$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cms",$conn);
$usr_typ="student";
$note="TimeTable Updated.";
$app="StudentTimetable.php";
	$strSQL1 = "INSERT INTO `cms`.`notification` ( `note`,`app`,`usr_typ`) VALUES ('".$note."','".$app."','".$usr_typ."') ";
	$rs1 = mysql_query($strSQL1);




$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('TimeTable.xlsx');
header('Location: FTimetable.php');
?>