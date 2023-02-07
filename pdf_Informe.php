

<?php
require('fpdf/fpdf.php');
include_once "M/conexion.php";
include_once "M/data.php";
class PDF extends FPDF



{


    

    private $con;
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo-cormun.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reportes de Activos',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80,10,'Activo',1,0,'C',0);
	$this->Cell(50,10,'Marca',1,0,'C',0);
	$this->Cell(50,10,'Modelo',1,1,'C',0);
    $this->Cell(80,10,'Serie',1,0,'C',0);
	$this->Cell(50,10,'Valor',1,0,'C',0);
	$this->Cell(50,10,'Detalle',1,1,'C',0);
    $this->Cell(80,10,'Estado',1,0,'C',0);
	$this->Cell(50,10,'Centro de Costo',1,0,'C',0);
	$this->Cell(50,10,'Fecha de Recepcion',1,1,'C',0);
    $this->Cell(50,10,'N°Registro',1,1,'C',0);








}


// $sql=" SELECT   activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
// from tbl_activo, tbl_estado, tbl_centrocosto
// where (tbl_activo.id_estado = tbl_estado.id) and (tbl_activo.id_centrocosto= tbl_centrocosto.id)";

// $rs = $this->con->query($sql);
// $arr=[];
// foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
//     $arr[] = $val;
// }
// return $arr;





// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina').$this->PageNo().'/{nb}',0,0,'C');
}
}









$pdf = new PDF('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);



$listado = $data->getDatos();


foreach ($listado as $row)
 {
	$pdf->Cell(80,10,$row['Activo'],1,0,'C',0);
	$pdf->Cell(50,10,$row['Marca'],1,0,'C',0);
	$pdf->Cell(50,10,$row['Modelo'],1,1,'C',0);
    $pdf->Cell(80,10,$row['serie'],1,0,'C',0);
	$pdf->Cell(50,10,$row['valor'],1,0,'C',0);
	$pdf->Cell(50,10,$row['detalle'],1,1,'C',0);
    $pdf->Cell(80,10,$row['estado'],1,0,'C',0);
	$pdf->Cell(50,10,$row['Centro de Costo'],1,0,'C',0);
	$pdf->Cell(50,10,$row['Fecha de Recepcion'],1,1,'C',0);
    $pdf->Cell(50,10,$row['N°Registro'],1,1,'C',0);
    }










// Creación del objeto de la clase heredada


$pdf->Output();
?>