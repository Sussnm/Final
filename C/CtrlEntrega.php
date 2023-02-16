<?php
include_once '../M/conexion.php';
include_once '../M/data.php';

$con = new Conexion();
$data = new Data($con->conectar());



 $id= $_POST['id'];
$txusuConsigna = $_POST['tx_usuCon'];
$txrutConsigna = $_POST['rut_consigna'];
  $txcargoConsigna = $_POST['tx_cargoConsigna'];
$txcentro = $_POST['tx_centro'];
$txcodigo = $_POST['tx_codigoEquipo'];
$txequipo = $_POST['tx_equipo'];
$txfecha_entrega = $_POST['tx_fechaentrega'];
$txdetalle = $_POST['tx_detalle'];
$txtrut = $_POST['tx_rutAsigna'];
$txnombreAsigna = $_POST['tx_nomAsigna'];
$txcargoAsigna = $_POST['tx_cargoAsigna'];

// echo $id;
// echo $txusuConsigna; 
// echo $txrutConsigna ;
// echo $txcargoConsigna ;
// echo $txcentro;
// echo $txcodigo;
// echo $txequipo;
// echo $txfecha_entrega;
// echo $txdetalle;
// echo $txtrut;
// echo $txnombreAsigna;
// echo $txusuConsigna; 
// echo $txcargoAsigna;

 


$data->editarEntrega($id,$txusuConsigna,$txrutConsigna, $txcargoConsigna, $txcentro,$txcodigo,  $txequipo,  $txfecha_entrega, $txdetalle, $txtrut,$txnombreAsigna, $txcargoAsigna);

// $data->editarEntrega($id,$txusuConsigna,$txrutConsigna, $txcargoConsigna, $txcentro,$txcodigo,  $txequipo,  $txfecha_entrega, $txdetalle, $txtrut,$txnombreAsigna, $txcargoAsigna);


header("Location: ../V/reportes/reporte_Entrega.php");






