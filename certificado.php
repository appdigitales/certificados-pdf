<?php 

define('FPDF_FONTPATH', 'font/');
require ('fpdf.php');


$name= $_POST['name'];
$curso= $_POST['curso'];

$dia = date("d");
$mes = "Julio";
$anio = date('Y');
//$ano = '2013';

//$pdf = new FPDF('L','cm',array(29.700,21));
$pdf=new FPDF('L','mm','A4');
$pdf->SetTextColor(0,0,0);

$pdf->AddPage();
//$pdf->Image('img/certificado.png',0,0,297,210,'PNG');
$pdf->Image('img/diploma.png',0,0,297,210,'PNG');

$pdf->SetFont('Times','B',30);
$pdf->Text(30,40,"CERTIFICADO POR FINALIZACION DEL CURSO");
$pdf->SetFont('Times','B',20);

$pdf->Cell(0,110,'SE RECONOCE QUE',0,0,'C');
$pdf->SetFont('helvetica','B',35);

$pdf->Cell(-270,150,$name,0,0,'C');
$pdf->SetFont('helvetica','B',15);

$pdf->Cell(0,179,"HA COMPLETADO SATISFATORIAMENTE",0,0,'C');
$pdf->Text(85,110,"EL PROGRAMA DE ". $curso);

// Dia
$pdf->SetFont('helvetica','B',15);
$pdf->Text(210,147,$dia);

// Mes

$pdf->SetFont('helvetica','B',15);
$pdf->Text(220,147,$mes);

// Año

$pdf->SetFont('helvetica','B',15);
$pdf->Text(238,147,$anio);


$pdf->Output('certificado','I');
?>