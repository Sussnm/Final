<?php
include_once '../M/conexion.php';
include_once '../M/data2.php';

// Se recibe información por POST proveniente de 'registrar.php' mediante ajax.



class DataModel{  
    private $con;

    public function __construct()
    {
    $con = new Conexion();
    $data = new Data($con->conectar());




}

}
