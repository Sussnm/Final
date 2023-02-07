<?php
include_once '../M/conexion.php';
include_once '../M/data.php';

$con = new Conexion();
$data = new Data($con->conectar());



$txtuser = $_POST['tx_usuario'];
$txrut = $_POST['tx_rut'];
$txcentro = $_POST['tx_centro'];
$txequipo = $_POST['tx_equipo'];
$txfecha_entrega = $_POST['tx_fechaentrega'];
$txcodigoQr = $_POST['tx_codigoQr'];
$txdetalle = $_POST['tx_detalle'];



$data->entregarActivos($txtuser,$txrut,$txcentro,$txequipo,$txfecha_entrega,$txcodigoQr,$txdetalle);


header("Location:../V/entregadeActivo.php");  ///funcion para que la pagina se muestre de nuevo
