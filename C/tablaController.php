<?php

include_once '../M/conexion.php';



class TablaController
{
    private $con;
    public function __construct()
    {
        $this->con = new Conexion(); 
        if ($_GET['method'] == 'formAccountSettings') {
            $this->guardar();
        }
    }



    public function guardar()
    {
        $tx_nombre = $_POST['tx_nombre'];
        $tx_modelo = $_POST['tx_modelo'];
        $tx_serie = $_POST['tx_serie'];
        $tx_cecosto = $_POST['tx_cecosto'];

        $tx_valor = $_POST['tx_valor'];
       $datetime = $_POST['datetime'];
        $tx_detalle = $_POST['tx_detalle'];
        $tx_estado = $_POST['tx_estado'];
         $tx_qr = $_POST['tx_qr'];

        $sql="INSERT INTO activo (fk_tipoActivo,fk_centroCosto,valor,fecha,fk_detalle, fk_estado, qr) VALUES(1, 1,'tx_valor','datetime',1,1, 'qr')";
        $model = $this->con->conectar();
        $resultado = $model->query($sql);
        if($resultado){
            //  OK
}else{
//ERROR
}
        
    }

 
    

}
$controller = new TablaController();