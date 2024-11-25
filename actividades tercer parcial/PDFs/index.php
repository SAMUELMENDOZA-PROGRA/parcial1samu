<?php
include 'bd.php';
require('fpdf186/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$result = $pdo->prepare("SELECT * FROM productos");
$result->execute();

$c11 = 20;  // Ancho de la columna para "Id"
$c12 = 60;  // Ancho de la columna para "Nombre"
$c13 = 30;  // Ancho de la columna para "Precio"

$x = $pdf->GetPageWidth();
$y = $pdf->GetPageHeight();
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetMargins(15, 50, 15); // Ajusta los márgenes si es necesario

$pdf->Cell($c11, 10, "Id", 1, 0, "C");
$pdf->Cell($c12, 10, "Nombre", 1, 0, "C");
$pdf->Cell($c13, 10, "Precio", 1, 1, "C"); // Mueve a la siguiente línea

$pdf->SetFont("Arial", "", 12);

if ($result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $pdf->Cell($c11, 10, $row['id'], 1, 0, "C");
        $pdf->Cell($c12, 10, utf8_decode($row['nombre']), 1, 0, "C");
        $pdf->Cell($c13, 10, "$" . $row['precio'], 1, 1, "C"); // Mueve a la siguiente línea
    }
} else {
    $pdf->Cell(0, 10, "No se encontraron resultados.", 1, 1, "C");
}

$pdf->SetFont("Arial", "", 10);
$pdf->SetY(-15);
$pdf->SetX(15);
$pdf->Text(15, $y - 10, utf8_decode("Nombre: Ramon Eduardo Ramirez Beltran"));
$pdf->Output();
?>