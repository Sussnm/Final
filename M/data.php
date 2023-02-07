

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
        $sql = "INSERT INTO tbl_activo (valor,fecha,id_estado,id_centrocosto,marca,modelo,num_serie,descripcion,qr,activo)
                               values ($txvalor, '$txdate',1,1,'$txmarca','$txmodelo','$txserie','$txdetalle','$txqr','$txactivo' )";

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
    $sql=" SELECT   activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
    from tbl_activo, tbl_estado, tbl_centrocosto
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
    $sql="SELECT   activo,marca,modelo,num_serie,valor,descripcion, tbl_estado.nombre as estado, tbl_centrocosto.nombre as centrocosto, fecha,qr
    from tbl_activo, tbl_estado, tbl_centrocosto
where (tbl_activo.id_estado = tbl_estado.id) and (tbl_activo.id_centrocosto= tbl_centrocosto.id) ";
    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}


////////////////////EDITAR//////////////////////

public function editar($id, $activo, $marca, $modelo, $num_serie, $valor, $descripcion, $estado, $centrocosto, $fecha, $qr)
{
    $sql="UPDATE tbl_activo SET id= '$id', activo = '$activo', marca = '$marca', modelo = '$modelo', num_serie = '$num_serie', valor= '$valor', descripcion='estado', centrocosto='$centrocosto', fecha='fecha', qr='$qr'  WHERE id = '$id'";


    $this->con->query($sql);
}











////////////////////////////////login//////////////////////////////////////////////////////////////////////


public function Login($usuario, $contraseña)
{
    $sql=
    "SELECT COUNT(*) AS 'valido'
    FROM tbl_usuario
    WHERE usuario='$usuario' 
    AND contraseña = ($contraseña)";

    $rs = $this->con->query($sql);
    foreach ($rs->fetchAll(PDO::FETCH_ASSOC) as $val) {
        $existe = $val['valido'];
    }
    return $existe;
}

///////////////////////////////ENTREGA DE ACTIVO//////////////////////////////////////

public function entregarActivos($txuser, $txrut, $txcentro, $txequipo, $txfecha_entrega, $txcodigoQr, $txdetalle )
{
    $sql = "INSERT INTO tbl_entrega (nombre,  rut, id_centrocosto,   equipo,  fecha_entrega, codigo_equipo, detalle)
                           values ('$txuser','$txrut',1,   '$txequipo','$txfecha_entrega','$txcodigoQr','$txdetalle' )";

    $this->con->query($sql);
}

//////////////////////////////REPORTE DE ENTREGA////////////////////////////////////


public function getTabla()
{
    $sql=" SELECT   nombre,rut,equipo,fecha_entrega,codigo_equipo,detalle, tbl_centrocosto.nombre as centrocosto, 
    from tbl_entrega, tbl_centrocosto
where   (tbl_enntrega.id_centrocosto= tbl_centrocosto.id)";

    $rs = $this->con->query($sql);
    $arr=[];
    foreach ($rs->fetchAll(PDO::FETCH_BOTH) as $val) {
        $arr[] = $val;
    }
    return $arr;
}



}






















