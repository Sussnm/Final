<?php
require('../PDF/fpdf.php');
include_once "../M/conexion.php";
include_once "../M/data.php";
$con = new Conexion();
$data = new Data($con->conectar());

class PDF extends FPDF
{
    // Cabecera de página
    public function Header()
    {
        // Logo
        $this->Image('../logo2.png', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(70, 10, 'Reporte de Activos', 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    public function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Pagina ').$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

?>