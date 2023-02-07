<?php
include_once '../M/conexion.php';
include_once '../M/data.php';

$con = new Conexion();
$data = new Data($con->conectar());




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

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final  = $_POST['fecha_final'];





// $valor = $_GET['valor'];

//  echo $txserie;
// echo "<br>";
// echo $txvalor;
// echo "<br>";
// echo $txdetalle;
// echo "<br>";
// echo $txmarca;
// echo "<br>";
// echo $txmodelo;
// echo "<br>";
// echo $txestado;
// echo "<br>";
// echo $txcentro;
// echo "<br>";
// echo $txdate;
// echo "<br>";
// echo $txqr;
// echo "<br>";
// echo $txactivo;












 $data->insertActivo($txserie,$txvalor,$txdetalle,$txmarca,$txmodelo,$txestado,$txcentro,$txdate,$txqr,$txactivo);



//  $data->insertarcentroCosto($txcentro);
header("Location:../V/ingresarActivo.php");  ///funcion para que la pagina se muestre de nuevo

