<?php

class Conexion{

    static public function conectar(){

        $db = new PDO("mysql:host=178.128.146.252;dbname=admin_sigmatest",
                "admin_sigmauser",
                "pfaDKIJyPF");
        
        $db->exec("set names utf8");

        return $db;
    
    }

}

?>
