

<?php
require('fpdf/fpdf.php');
include_once "M/conexion.php";
include_once "M/data.php";
$con = new Conexion();
$data = new Data($con->conectar());


//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->Output('F', 'prueba.pdf');

// class PDF extends FPDF
// {

 
    $datos= $data->getDatos();

var_dump($datos);


// // Cabecera de página
// function Header()
// {
//     // Logo
    // $pdf->Image('vendors/imagenes/logocormun.png',10,8,33);
//     // Arial bold 15
//     $this->SetFont('Arial','B',15);
//     // Movernos a la derecha
//     $this->Cell(80);
//     // Título
//     $this->Cell(60,10,'REPORTE DE ACTIVOS',1,0,'C');
//     // Salto de línea
//     $this->Ln(20);
// }

// // Pie de página
//  function Footer()
// {
//     // Posición: a 1,5 cm del final
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Número de página
//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
// }
// }

 

  

  
	





	$pdf = new FPDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'ACTIVO',1,1,'C',1);
	$pdf->Cell(40,6,'MARCA',1,1,'C',1);
	$pdf->Cell(40,6,'MODELO',1,1,'C',1);
	$pdf->Cell(40,6,'SERIE',1,1,'C',1);
    $pdf->Cell(40,6,'VALOR',1,1,'C',1);
	$pdf->Cell(40,6,'DESCRIPCION',1,1,'C',1);
    $pdf->Cell(40,6,'ESTADO',1,1,'C',1);
	$pdf->Cell(40,6,'CENTROCOSTO',1,1,'C',1);
    $pdf->Cell(40,6,'FECHA',1,1,'C',1);
   $pdf->Cell(40, 6, 'QR', 1, 1, 'C', 1);
   
 
	
	$pdf->SetFont('Arial','',10);
	
	// 
    foreach($datos as $dato)
	{
		$pdf->Cell(40,6,$dato['activo'],1,0,'C',1);  //ancho-alto-texto-, los primeros campos del cell
		$pdf->Cell(40,6,$dato['marca'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['modelo'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['num_serie'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['valor'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['descripcion'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['estado'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['centrocosto'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['fecha'],1,0,'C',1); 
		$pdf->Cell(40,6,$dato['qr'],1,0,'C',1); 
  
	}
	$pdf->Output();















?>











