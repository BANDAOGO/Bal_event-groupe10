<?php
    error_reporting(E_ALL);
    function autolard($class){
        require "models/".$class.".class.php";
    }
    spl_autoload_register('autoloard');

?>