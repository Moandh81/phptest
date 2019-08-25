<?php 


include "Humain.php" ; 


$anis = new Humain("anis", "dhouieb", 13.5) ;


var_dump($anis) ;

$anis2= clone $anis ;

var_dump($anis2) ;