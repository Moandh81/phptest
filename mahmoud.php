<?php 


include "Medecin.php" ;


$mahmoud = new Medecin("mahmoud", "Ben Arfa", 58, "généraliste") ;

var_dump($mahmoud) ;


echo $mahmoud->getSpecialite();
$mahmoud->setSpecialite("pediatre") ;
echo $mahmoud->getSpecialite();
