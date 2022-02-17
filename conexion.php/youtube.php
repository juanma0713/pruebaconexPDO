<?php

class conexion{
    private $user = "root";
    private $pass = "";

    function conectar(){

        try{
        $pdo = new PDO('mysql: host=localhost; dbname=conexpdo', $this->user, $this->pass); 
        echo " conexion exitosa ------------";
        }
        catch(PDOException $error){
            echo "no se pude conectar" . $error->getMessage();
        }


       }
}

$nuevaconexion = new  conexion();
$nuevaconexion->conectar();