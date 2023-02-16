<?php
include_once '../M/conexion.php';
include_once '../M/data.php';

$con = new Conexion();
$data = new Data($con->conectar());


////////////formulario ingresoActivo///////////
$id = $_POST['id'];
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


// echo $id;
// echo $txserie ;
// echo $txvalor ;
// echo $txdetalle ;
// echo $txmarca ;
// echo $txmodelo;
// echo $txestado ;
// echo $txcentro ;
// echo $txdate;
// echo $txqr ;
// echo $txactivo ;





// if ($_REQUEST["method"]=="editar") {
//     $id = $_POST["id"];
//     $data->editar($id,$txactivo, $txmarca, $txmodelo, $txserie, $txvalor, $txdetalle, $txestado, $txcentro, $txdate, $txqr);
// }



$data->editar($id,$txactivo, $txmarca, $txmodelo, $txserie, $txvalor, $txdetalle, $txestado, $txcentro, $txdate, $txqr);


// editar($id, $activo, $marca, $modelo, $num_serie, $valor, $descripcion, $estado, $centrocosto, $fecha, $qr)

    header("Location: ../V/reportes/reportes.php");




///////////////////////////////////////////////////////////////////////////////




