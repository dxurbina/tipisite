<?php
    class Conexion{
        public function conex(){
            $con =new PDO('mysql:host=127.0.0.1; dbname=tipisite','root','');
            return $con;
        }
    }
?>