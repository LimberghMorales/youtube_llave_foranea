<?php
    class conexion{
        public function PDO(){
            try {
                $PDO = new PDO("mysql:host=localhost;dbname=llaves","root","");
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>