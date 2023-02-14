<?php
include_once '../M/conexion.php';
include_once '../M/data.php';

$con = new Conexion();
$data = new Data($con->conectar());


////////////formulario ingresoActivo///////////

$txserie = $_POST['tx_serie'];
$txvalor = $_POST['tx_valor'];
$txdetalle = $_POST['tx_detalle'];
$txmarca = $_POST['tx_marca'];
$txmodelo= $_POST['tx_modelo'];
$txestado = $_POST['tx_estado'];
$txcentro = $_POST['tx_centro'];
$txdate = $_POST['tx_date'];
$txqr = $_POST['tx_qr'];
$txactivo = $_POST['tx_activo'];


// echo $txserie ; 
//  echo $txvalor ;
// echo $txdetalle;
// echo   $txmarca ;
// echo    $txmodelo;
// echo    $txestado ;
// echo   $txcentro ;
// echo    $txdate; 
// echo   $txqr ;
//   echo $txactivo;
// ;




// if ($_REQUEST["method"]=="formAccountSettings") {
    // $fecha_final  = $_POST['fecha_final'];
    
    // $fecha_inicio = $_POST['fecha_inicio'];

    $data->insertActivo($txserie, $txvalor, $txdetalle, $txmarca, $txmodelo, $txestado, $txcentro, $txdate, $txqr, $txactivo);

    header("Location:../V/ingresarActivo.php");

// }
if ($_REQUEST["method"]=="edit") {
    $id = $_POST["id"];
    $data->editar($id,$txserie, $txvalor, $txdetalle, $txmarca, $txmodelo, $txestado, $txcentro, $txdate, $txqr, $txactivo);

    header("Location: ../V/reportes/reporte.php");

}
//  $data->insertarcentroCosto($txcentro);
  ///funcion para que la pagina se muestre de nuevo


///////////////////////////////////////////////////////////////////////////////




























////////////////PAGINA ASOCIADA A LA TABLA INGRESAR ACTIVO/////////////////////////////////