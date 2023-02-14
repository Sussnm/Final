
 <?php



require '../vendor/autoload.php';
include_once "../M/conexion.php";

include_once "../M/data.php";

$con = new Conexion();
$data = new Data($con->conectar()); 



use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory };
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;











$datos= $data->getDatos();



$excel = new Spreadsheet();
$hojaActiva= $excel->getActiveSheet();
$hojaActiva->setTitle("reporte");

$encabezado = ["Activo", "Marca", "Modelo", "Serie", "Valor", "Detalle", "Estado", "Centro de Costo", "Fecha de Recepcion", "Serie"];


$hojaActiva->fromArray($encabezado, null, 'A1');


// $hojaActiva->setCellValue('A1', 'activo');
// $hojaActiva->setCellValue('B1', 'marca');
// $hojaActiva->setCellValue('C1', 'modelo');
// $hojaActiva->setCellValue('D1', 'serie');
// $hojaActiva->setCellValue('E1', 'valor');
// $hojaActiva->setCellValue('F1', 'detalle');
// $hojaActiva->setCellValue('G1', 'estado');
// $hojaActiva->setCellValue('H1', 'centro de costo');
// $hojaActiva->setCellValue('I1', 'fecha de Recepcion');
// $hojaActiva->setCellValue('J1', 'serie');



$fila= 2;
// echo json_encode($datos);

# Obtener registros de SQL
$activo = $data->activo;
$txmarca = $data->marca;
$txmodelo = $data->modelo;
$txserie = $$data->serie;
$txvalor = $data->valor;
$txdetalle = $data->descripcion;
$txestado = $data->id_estado;
$txcentro = $data->id_centro;
$txdate = $data->fecha;
$txserie = $data->num_serie;


// foreach($datos as $dato){
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $txactivo);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $marca);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $modelo);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $serie);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $valor);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $descripcion);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $id_estado);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $id_centro);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $fecha);
$hojaActiva->setCellValueByColumnAndRow(1, $fila, $num_serie);

// $hojaActiva->setCellValue('B'.$fila,$dato['marca']);
// $hojaActiva->setCellValue('C'.$fila,$dato['modelo']);
// $hojaActiva->setCellValue('D'.$fila,$dato['num_serie']);
// $hojaActiva->setCellValue('E'.$fila,$dato['valor']);
// $hojaActiva->setCellValue('F'.$fila,$dato['descripcion']);
// $hojaActiva->setCellValue('J'.$fila,$dato['estado']);
// $hojaActiva->setCellValue('G'.$fila,$dato['centrocosto']);
// $hojaActiva->setCellValue('H'.$fila,$dato['fecha']);
// $hojaActiva->setCellValue('I'.$fila,$dato['num_serie']);
$fila++;

// }


// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment;filename="reporte.xls"');
// header('Cache-Control: max-age=0');

// $writer = IOFactory::createWriter($excel, 'Xlsx');

$writer = new Xlsx($documento);
$writer->save('php://output');
?>
// exit; 


























?>