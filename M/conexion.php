<?php



//-------------VERSION PDO----------------------
class conexion
{
    private $charset = "utf8";
    private $password = "123";
    private $username = "sa";
    private $database = "inventario";
    private $hostname = "localhost";



    public function conectar()
    {
        try {
            $conexion = "sqlsrv:server=".$this->hostname.";database=".$this->database;


            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($conexion, $this->username, $this->password);

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}
   
    
    
    