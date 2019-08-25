<?php 


require "Voiture.php" ;

$citroen = new Voiture("lna", 1985, 10000) ;

 $citroen->freiner() ;

 echo "<br>" ;

 echo $citroen->getCounter();