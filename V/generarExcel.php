
<?php

require 'vendor/composer/autoload.php';
include_once "../M/conexion.php";

include_once "../M/data.php";

$con = new Conexion();
$data = new Data($con->conectar());



use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};


$datos= $data->getDatos();



$excel = new Spreadsheet();
$hojaActiva= $excel->getActiveSheet();
$hojaActiva->setTitle("reporte");

$hojaActiva->setCellValue('A1', 'activo');
$hojaActiva->setCellValue('B1', 'marca');
$hojaActiva->setCellValue('C1', 'modelo');
$hojaActiva->setCellValue('D1', 'serie');
$hojaActiva->setCellValue('E1', 'valor');
$hojaActiva->setCellValue('F1', 'detalle');
$hojaActiva->setCellValue('G1', 'estado');
$hojaActiva->setCellValue('H1', 'centro de costo');
$hojaActiva->setCellValue('I1', 'fecha de Recepcion');
$hojaActiva->setCellValue('J1', 'serie');

$fila= 2;
foreach($datos as $dato){
$hojaactiva->setCellValue('A'.$fila,$dato['activo']);
$hojaactiva->setCellValue('B'.$fila,$dato['marca']);
$hojaactiva->setCellValue('C'.$fila,$dato['modelo']);
$hojaactiva->setCellValue('D'.$fila,$dato['serie']);
$hojaactiva->setCellValue('E'.$fila,$dato['valor']);
$hojaactiva->setCellValue('F'.$fila,$dato['detalle']);
$hojaactiva->setCellValue('J'.$fila,$dato['id_estado']);
$hojaactiva->setCellValue('G'.$fila,$dato['id_centrocosto']);
$hojaactiva->setCellValue('H'.$fila,$dato['fecha']);
$hojaactiva->setCellValue('I'.$fila,$dato['num_serie']);
$fila++;

}


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="reporte.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');

exit; 



























?>