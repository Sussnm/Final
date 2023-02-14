

<?php

include_once 'conexion.php';



class Data
{
    private $con;






    public function __construct($conexion)
    {
        $this->con = $conexion;
    }

////////////////////////////////////////////INGRESAR ACTIVOS////////////////////////////////////////////////////////////////////////////
public function insertActivo($txserie, $txvalor, $txdetalle, $txmarca, $txmodelo, $txestado, $txcentro, $txdate, $txqr, $txactivo)
{
    $sql = "INSERT INTO tbl_activo (num_serie, valor, descripcion, marca, modelo, id_estado, id_centrocosto, fecha, qr, activo)
                           values ('$txserie', $txvalor, '$txdetalle', '$txmarca', '$txmodelo', $txestado, $txcentro, '$txdate', '$txqr', '$txactivo' )";

    $this->con->query($sql);
}


/////////////////////////////////OBTENER ESTADOS//////////////////////////////////////////////////////////////////////////////
public function getEstados()
{
    $sql="SELECT id,nombre FROM tbl_estado";
    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}


/////////////////////////////////////OBTENER CENTRO DE COSTO//////////////////////////////////////////////////////////////////////
public function getCentros()
{
    $sql="SELECT id,nombre FROM tbl_centrocosto";
    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}

///////////////////////////////////////////////////////TABLA//////////////////////////////////////////////////////////
public function getDatos()
{
    $sql=" SELECT   activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr,
    tbl_activo.id as id_activo from tbl_activo, tbl_estado, tbl_centrocosto
where (tbl_activo.id_estado = tbl_estado.id) and (tbl_activo.id_centrocosto= tbl_centrocosto.id)";



    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}
/////////////////////////CALENDARIO/////////////////////////////
  public function getFecha($fecha_inicio, $fecha_final)
  {
      // $sql=  "SELECT * FROM tbl_activo WHERE fecha BETWEEN '$fecha_inicio' AND '$fecha_final'";

      $sql = "SELECT   activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
    from tbl_activo, tbl_estado, tbl_centrocosto
where (tbl_activo.id_estado = tbl_estado.id) and (tbl_activo.id_centrocosto= tbl_centrocosto.id) and fecha BETWEEN '$fecha_inicio' AND '$fecha_final'";

      $rs = $this->con->query($sql);
      $arr=[];
      foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
          $arr[] = $val;
      }
      return $arr;
  }
/////////////////////QR//////////////
public function getActivo()
{
    $sql="SELECT a.id,activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
    from tbl_activo a, tbl_estado, tbl_centrocosto
where (a.id_estado = tbl_estado.id) and (a.id_centrocosto= tbl_centrocosto.id) ";
    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}


////////////////////EDITAR ACTIVO//////////////////////

public function editar($id, $activo, $marca, $modelo, $num_serie, $valor, $descripcion, $estado, $centrocosto, $fecha, $qr)
{
    $sql="UPDATE tbl_activo SET activo = '$activo', marca = '$marca', modelo = '$modelo', num_serie = '$num_serie', valor= '$valor', descripcion='$descripcion', id_estado='$estado',id_centrocosto='$centrocosto', fecha='$fecha', qr='$qr'  WHERE id = '$id'";


    $this->con->query($sql);
}


////////////////////EDITAR ENTREGA A USUARIO//////////////////////

public function editarEntrega($id,$txusuConsigna,$txrutConsigna, $txcargoConsigna, $txcentro,$txcodigo,  $txequipo,  $txfecha_entrega, $txdetalle, $txtrut,$txnombreAsigna, $txcargoAsigna)
{
    $sql="UPDATE tbl_entrega SET nombre_consignatario = '$txusuConsigna', rut_consignatario = '$txrutConsigna', cargo_consignatario = '$txcargoConsigna',id_centrocosto = '$txcentro', id_activo = '$txcodigo', nom_activo= '$txequipo', fecha_entrega= '$txfecha_entrega',detalle='$txdetalle', rut_asigna= '$txtrut', nombre_asigna= '$txnombreAsigna', cargo_asigna='$txcargoAsigna'  WHERE id_activo = '$id'";


    $this->con->query($sql);
}










///////////////////////////////ENTREGA DE ACTIVO//////////////////////////////////////

public function entregarActivos($txusuConsigna, $txrutConsigna, $txcargoConsigna, $txcentro, $txcodigo, $txequipo, $txfecha_entrega, $txdetalle, $txtrut, $txnombreAsigna, $txcargoAsigna)
{
    $sql = "INSERT INTO tbl_entrega (nombre_consignatario, rut_consignatario, cargo_consignatario,id_centrocosto, id_activo,nom_activo,  fecha_entrega, detalle, rut_asigna, nombre_asigna,cargo_asigna)
        
     values ('$txusuConsigna',
     '$txrutConsigna',
    '$txcargoConsigna',
     $txcentro, 
     '$txcodigo',
     '$txequipo', 
     '$txfecha_entrega',
     '$txdetalle',
     '$txtrut',
     '$txnombreAsigna',
     '$txcargoAsigna')";


    $this->con->query($sql);
}







//////////////////////////////REPORTE DE ENTREGA////////////////////////////////////


public function getTabla()
{
    $sql=" SELECT   nombre_consignatario,rut_consignatario,cargo_consignatario,  tbl_centrocosto.nombre as centrocosto,
    id_activo,nom_activo,fecha_entrega,detalle, rut_asigna,nombre_asigna,cargo_asigna
      from tbl_entrega, tbl_centrocosto
  where   (tbl_entrega.id_centrocosto= tbl_centrocosto.id)";

    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}

////////////////////////////TABLA ASIGNATARIO//////////////////////////////////////
}









////////////////////////////////AUTOCOMPLETADO//////////////////////////////

























