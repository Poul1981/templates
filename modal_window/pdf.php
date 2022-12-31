<?php

use Mpdf\Mpdf;

require_once'../vendor/autoload.php';

//$mpdf = new Mpdf('utf-8', 'A4', '8', '', 120, 10, 7, 7, 10, 10);
$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => [100, 100],
    'orientation' => 'P',

]);


$mpdf->setTitle("Заголовок");
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output("Myfilename.pdf", 'I');


/////////////////////////////////////////////

$text = "VIBOR";
$text1 = "11";
$text2 = "10";


$mpdf = new mPDF(['utf-8', 'A4-P', '', '', 100, 0, 45, 0, 0, 0, 'L']);
//$mpdf->text_input_as_HTML = true;
$stylesheet = file_get_contents('style.css');

//$mpdf->SetImportUse();
//$file = 'img/Diplom.pdf';
//$page = $mpdf->SetSourceFile($file);
//$tml = $mpdf->ImportPage($page);

//$mpdf->UseTemplate($tml);
$mpdf->SetMargins(0, 0, 0, true);
$mpdf->setHeader(false);
$mpdf->setFooter(false);
$mpdf->SetFont('times', '', 12);
$mpdf->SetAutoPageBreak(true, 2);

$myText = $mpdf->WriteHTML($stylesheet,1);
//$mpdf->WriteHTML($html);
//$mpdf->WriteText(100, 130, $html);
$mpdf->SetFont('Times','BI', 20);
////$mpdf->WriteText(20,20, $text );
$mpdf->WriteText(100, 130, $text);
$mpdf->WriteText(133, 142, $text1);
$mpdf->WriteText(180, 142, $text2);

//$mpdf->MultiCell(0, 0, $text, 0, 'C', 0, 1, 95, 120, 0, 0,0);
//$mpdf->MultiCell(0, 0, $text, 0, 'C', 0, 1, 128, 130, 1, 0,0);
//$mpdf->MultiCell(0, 165, $text, 0, 0, 'С', 0, 0);
//$mpdf->MultiCell(150, 169, $text1, 0, 0, 'С', 0, 0);
//$mpdf->MultiCell(0, 165, $text2, 0, 0, 'С', 0, 0);

$mpdf->Output('new.pdf', 'I');