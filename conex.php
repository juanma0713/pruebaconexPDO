<?php 

class conexion{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "conexpdo";
    private $conect;


    public function__construct(){
        $connectionString =  "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conect = new PDO($connectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion establecida";
            }
            catch(Exception $error){
                $this->conect='Error de conxion';
                echo "Error". $error->getMessage()
            }
        }
    }
    
    
$conect = new conexion();

?>
    
