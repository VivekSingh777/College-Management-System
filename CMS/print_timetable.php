<?php

require_once('tcpdf_include.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 049');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 049', PDF_HEADER_STRING);

]$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', '', 10);

$pdf->AddPage();


$html = '<h1>Test TCPDF Methods in HTML</h1>
<h2 style="color:red;">IMPORTANT:</h2>
<span style="color:red;">If you are using user-generated content, the tcpdf tag can be unsafe.<br />
You can disable this tag by setting to false the <b>K_TCPDF_CALLS_IN_HTML</b> constant on TCPDF configuration file.</span>
<h2>write1DBarcode method in HTML</h2>';

$params = TCPDF_STATIC::serializeTCPDFtagParameters(array('CODE 39', 'C39', '', '', 80, 30, 0.4, array('position'=>'S', 'border'=>true, 'padding'=>4, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>4), 'N'));
$html .= '<tcpdf method="write1DBarcode" params="'.$params.'" />';

$params = TCPDF_STATIC::serializeTCPDFtagParameters(array('CODE 128', 'C128', '', '', 80, 30, 0.4, array('position'=>'S', 'border'=>true, 'padding'=>4, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>4), 'N'));
$html .= '<tcpdf method="write1DBarcode" params="'.$params.'" />';

$html .= '<tcpdf method="AddPage" /><h2>Graphic Functions</h2>';

$params = TCPDF_STATIC::serializeTCPDFtagParameters(array(0));
$html .= '<tcpdf method="SetDrawColor" params="'.$params.'" />';

$params = TCPDF_STATIC::serializeTCPDFtagParameters(array(50, 50, 40, 10, 'DF', array(), array(0,128,255)));
$html .= '<tcpdf method="Rect" params="'.$params.'" />';
$pdf->writeHTML($html, true, 0, true, 0);

$pdf->lastPage();
$pdf->Output('example_049.pdf', 'I');

?>