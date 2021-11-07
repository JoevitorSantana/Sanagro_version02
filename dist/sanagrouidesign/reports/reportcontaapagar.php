<?php
session_start();
ob_start();
include './fpdf/fpdf.php';
include './connection.php';


$farmName = farmName();
$pessoas = selectContaPagar();

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de Contas à Pagar'),1,0,"C");
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

$pdf->SetFont("Arial","I",8);
$pdf->SetFillColor (240, 240, 240);
$pdf->Cell(60,7,utf8_decode("Descrição"),1,0,"C");
$pdf->Cell(30,7,utf8_decode("Fornecedor"),1,0,"C");
$pdf->Cell(20,7,utf8_decode("Valor"),1,0,"C");
$pdf->Cell(10,7,utf8_decode("Prest."),1,0,"C");
$pdf->Cell(20,7,utf8_decode("Vl. Prestação"),1,0,"C");
$pdf->Cell(20,7,utf8_decode("Status"),1,0,"C");
$pdf->Cell(25,7,utf8_decode("Vencimento"),1,0,"C");
//$pdf->Cell(60,7,  utf8_decode("Endereço"),1,0,"C");
$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->SetFont("Arial","I",8);
    $pdf->Cell(60,7,utf8_decode($pessoa["description"]),0,"C");
    $pdf->Cell(30,7,utf8_decode($pessoa["pro_name"]),0,"C");
    $pdf->Cell(20,7,utf8_decode($pessoa["format(value,2,'de_DE')"]),0,0,"C");
    $pdf->Cell(10,7,utf8_decode($pessoa["installments"]),0,"C");      
    $pdf->Cell(20,7,utf8_decode($pessoa["format(installment_value,2,'de_DE')"]),0,0,"C");      
    $pdf->Cell(20,7,utf8_decode($pessoa["status"]),0,0,"C");      
    $pdf->Cell(25,7, formatoData($pessoa["expiration"]),0,"C");  
    $pdf->Ln();
}

$pdf->Output("Contas a Pagar.pdf","D");
