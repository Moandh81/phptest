<?php 


require "Medecin.php" ;


$docteur1 = new Medecin("samir", "bough", 24, "generaliste") ;
$docteur2 = new Medecin("samir", "bough", 24, "generaliste") ;
$docteur3 = new Medecin("samir", "bough", 24, "generaliste") ;


echo Medecin::$compteur ;