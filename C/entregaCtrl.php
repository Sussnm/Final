<?php
include_once '../M/conexion.php';
include_once '../M/data.php';

$con = new Conexion();
$data = new Data($con->conectar());

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


echo $txusuConsigna; 
echo $txrutConsigna ;
echo $txcargoConsigna ;
echo $txcentro;
echo $txcodigo;
echo $txequipo;
echo $txfecha_entrega;
echo $txdetalle;
echo $txtrut;
echo $txnombreAsigna;
echo $txusuConsigna; 
echo $txcargoAsigna;




// $data->entregarActivos($txusuConsigna,$txrutConsigna, $txcargoConsigna, $txcentro,$txcodigo,  $txequipo,  $txfecha_entrega,  $txdetalle,$txtrut , $txnombreAsigna, $txcargoAsigna );
//  $data->insertarcentroCosto($txcentro);
 ///funcion para que la pagina se muestre de nuevo






// if ($_REQUEST["method"]=="entregadeActivo") {
//   $fecha_final  = $_POST['fecha_final'];
  
//   $fecha_inicio = $_POST['fecha_inicio'];

 
  $data->entregarActivos($txusuConsigna,$txrutConsigna, $txcargoConsigna, $txcentro,$txcodigo,  $txequipo,  $txfecha_entrega, $txdetalle, $txtrut,$txnombreAsigna, $txcargoAsigna);
  header("Location:../V/entregadeActivo.php");

// }

// else{


// }

// if ($_POST["metodo"]=="editar") {
//   $id = $_POST["id"];
//   $data->editarEntrega($id,$txusuConsigna,$txrutConsigna, $txcargoConsigna, $txcentro,$txcodigo,  $txequipo,  $txfecha_entrega, $txdetalle, $txtrut,$txnombreAsigna, $txcargoAsigna);
//   header("Location: ../V/reportes/reporte_Entrega.php");

// }










///////////////////////////PAGINA ASOCIADA A LA TABLA ENTREGA DE ACTIVO A USUARIO/////////////////////////


