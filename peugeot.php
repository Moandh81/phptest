<?php 


require "Voiture.php" ;

$deuxcentcinq = new Voiture("peugeot", 1985, 10000) ;

 $deuxcentcinq->freiner() ;

 echo "<br>" ;

 echo $deuxcentcinq->getCounter();