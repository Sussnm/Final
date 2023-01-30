

<?php

include_once 'conexion.php';

// Se recibe información por POST proveniente de 'registrar.php' mediante ajax.

class Data
{
    private $con;

    public function __construct($conexion)
    {
        // $con = new Conexion();
        // $data = new Data($con->conectar());
        $this->con = $conexion;
    }


    public function insertActivo($txserie,$txvalor,$txdetalle,$txmarca,$txmodelo, $txestado, $txcentro, $txdate,$txqr,$txactivo,)
    {
    $sql = "INSERT INTO tbl_activo (valor,fecha,id_estado,id_centrocosto,marca,modelo,num_serie,descripcion,qr,activo)
                               values ($txvalor, '$txdate',1,1,'$txmarca','$txmodelo','$txserie','$txdetalle','$txqr','$txactivo' )";

$this->con->query($sql);

}

   
public function getEstados(){
    $sql="SELECT id,nombre FROM tbl_estado";
    $rs = $this->con->query($sql);
    $arr=[];
    foreach($rs->fetchAll(PDO::FETCH_BOTH) as $val){
        $arr[] = $val;
    }
    return $arr;
}

public function getCentros(){
    $sql="SELECT id,nombre FROM tbl_centrocosto";
    $rs = $this->con->query($sql);
    $arr=[];
    foreach($rs->fetchAll(PDO::FETCH_BOTH) as $val){
        $arr[] = $val;
    }
    return $arr;
}
    

}
