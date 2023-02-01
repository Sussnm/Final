<?php

include_once "../M/conexion.php";

include_once "../C/prueba.php";
  

$sql=" SELECT  activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
from tbl_activo, tbl_estado, tbl_centrocosto
where (tbl_activo.id_estado = tbl_estado.id) and (tbl_activo.id_centrocosto= tbl_centrocosto.id)";


$list = $data->getDatos();

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();//////para poner el indice en el foooter
$pdf->AddPage();
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Times', '', 12);

while ($fila = $list->fetch_assoc()) {
    $pdf->Cell(90, 10, $fila['activo'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['marca'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['modelo'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['num_serie'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['valor'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['estado'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['centrocosto'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['fecha'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $fila['qr'], 1, 0, 'C', 0);
}

$pdf->Output();


?>