<?php
class Conexion extends PDO{
    private $host = 'localhost';
    private $user= 'root';
    private $password= '';
    private $dbName='id18188624_carisoa';

    public function __construct()
    {
        try {
            parent::__construct('mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8',$this->user,$this->password
                ,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }catch(PDOException $e){
            echo $e->getMessage();
            exit;
        }
    }
}

?>