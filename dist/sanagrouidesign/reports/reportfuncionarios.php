<?php
session_start();
ob_start();
include './fpdf/fpdf.php';
include './connection.php';

$pessoas = selectFuncionarios();
$farmName = farmName();

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de Funcionários'),1,0,"C");
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
$pdf->Cell(50,7,utf8_decode("Nome"),1,0,"C");
$pdf->Cell(25,7,utf8_decode("Cargo"),1,0,"C");
$pdf->Cell(25,7,utf8_decode("Contato"),1,0,"C");
$pdf->Cell(40,7,utf8_decode("Endereço"),1,0,"C");
$pdf->Cell(40,7,utf8_decode("Cidade"),1,0,"C");
$pdf->Cell(10,7,utf8_decode("UF"),1,0,"C");
//$pdf->Cell(60,7,  utf8_decode("Endereço"),1,0,"C");
$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->Cell(50,7,utf8_decode($pessoa["name"]),0,"C");
    $pdf->Cell(25,7,utf8_decode($pessoa["office"]),0,"C");
    $pdf->Cell(25,7,utf8_decode($pessoa['contact']),0,0,"C");
    $pdf->Cell(40,7,utf8_decode($pessoa["address"]),0,"C");      
    $pdf->Cell(40,7,utf8_decode($pessoa["city"]),0,0,"C");      
    $pdf->Cell(10,7,utf8_decode($pessoa["uf"]),0,0,"C");      
    $pdf->Ln();
}

$pdf->Output("Funcionarios.pdf","D");

