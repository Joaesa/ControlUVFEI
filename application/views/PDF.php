<?php 
require "fpdf.php";
class PDF extends FPDF{

}
//Declacion de la Hoja
$pdf=new PDF('p', 'mm', 'Letter');
$pdf->SetMargins(20 , 18);
$pdf->AliasNbPAges();
$pdf->AddPage();

//Datos de Titulo
//$pdf->SetTextColor(0x00, 0x00,0x00);
//$pdf->SetFont("Arial","b",9);
//$pdf->Cell(0,5,'Reporte de maestros',0,1,'C');

//Datos de coneccion
//$pdf->Ln();
//Datos a Mostrar


$pdf->Output();
?>
