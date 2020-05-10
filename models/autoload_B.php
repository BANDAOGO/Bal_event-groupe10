<?php
error_reporting(E_ALL);
function chargeClasse($classe){
  require "../controlleurs/class/".$classe.".class.php";
}
spl_autoload_register('chargeClasse');
