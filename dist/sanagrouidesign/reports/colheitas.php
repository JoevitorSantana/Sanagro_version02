<?php
session_start();
ob_start();
include './fpdf/fpdf.php';
include './connection.php';


$farmName = farmName();
$pessoas = selectColheita();

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de Colheitas - 2021'),1,0,"C");
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,10,utf8_decode('Nome: '.$_SESSION['nome'].' ' . $_SESSION['lastname']),0,0,"L");
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,10,utf8_decode('Usuário: '.$_SESSION['usuario']),0,0,"L");
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
foreach ($farmName as $farm){
    $pdf->Cell(190,10,utf8_decode($farm['name']),0,0,"L");
    $pdf->Ln(5);
}
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y \à\s H:i:s');
$pdf->Cell(190,10,utf8_decode($date),0,0,"L");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",10);
$pdf->SetFillColor (240, 240, 240);
$pdf->Cell(60,7,"Safra",1,0,"C");
$pdf->Cell(20,7,utf8_decode("Produção"),1,0,"C");
$pdf->Cell(20,7,utf8_decode("Unidade"),1,0,"C");
$pdf->Cell(65,7,utf8_decode("Área Utilizada"),1,0,"C");
$pdf->Cell(25,7,utf8_decode("Data do fim"),1,0,"C");
//$pdf->Cell(60,7,  utf8_decode("Endereço"),1,0,"C");
$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->Cell(60,7,utf8_decode($pessoa["name"]),0,"C");
    $pdf->Cell(20,7,$pessoa['production'],0,"C");
    $pdf->Cell(20,7,$pessoa["metric"],0,"C");
    $pdf->Cell(65,7, utf8_decode($pessoa["ar_name"]),0,"C");
    $pdf->Cell(25,7, formatoData($pessoa["dateend"]),0,"C");
    $pdf->Ln();
}

$pdf->Output("Colheitas.pdf","D");
