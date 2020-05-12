<?php
    class connection {
        private $base;
        function __construct(){
            try {
                $this->base=new PDO("mysql:host=localhost;bdname=evenementielle","root","");
            } catch (PDOexception $e) {
                echo $e->getMessage();
            }
            
        }
        function getBase(){
            return $this->base;
        }
    }

?>

