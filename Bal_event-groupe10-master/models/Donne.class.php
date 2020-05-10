<?php
    class connection {
        private $_db;
        function __construct(){
            $this->_db=new PDO("mysql:host=localhost;bdname=evenementielle","root","");
        }
        function getBase(){
            return $this->_db;
        }
    }

?>