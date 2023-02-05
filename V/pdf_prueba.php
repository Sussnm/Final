<?php
require_once('class.ezpdf.php');
$pdf = new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

include_once "../M/conexion.php";
include_once "../M/data.php";
$con = new Conexion();
$data = new Data($con->conectar());

$sql=" SELECT  activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
from tbl_activo, tbl_estado, tbl_centrocosto
where (tbl_activo.id_estado = tbl_estado.id) and (tbl_activo.id_centrocosto= tbl_centrocosto.id)";
$list = $data->getDatos();
//$totEmp = sqlsrv_num_rows($list);

$titles = array(
				'NOMBRE'=>'<b>activp</b>',
				'EDAD'=>'<b>hora_in</b>',
				'DESCRIPCION'=>'<b>hora_sal</b>',
				'NOMBRE'=>'<b>fecha</b>',
				'EDAD'=>'<b>hora_in</b>',
				'DESCRIPCION'=>'<b>hora_sal</b>',
				'NOMBRE'=>'<b>fecha</b>',
				'EDAD'=>'<b>hora_in</b>',
				'DESCRIPCION'=>'<b>hora_sal</b>',
				'CIUDAD'=>'<b>nom_usuario</b>'
				);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>INFORME 1</b>\n";
$txttit.= " \n";
date_default_timezone_set('America/Santiago');
$pdf->ezText($txttit, 12);
$pdf->ezTable($list, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
//$pdf->ezText("<b>Hora:</b> ".date("H:i:s")"\n\n", 10);
$pdf->ezStream();
?>