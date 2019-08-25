<?php 

require "Humain.interface.php" ;

class Moi implements Humain {

    public $add ;
    public $postal ;
    public $ville ;
    
    
    public function setAdresse($cA, $cP, $cV) {

        $this->add = $cA ;
        $this->postal = $cP ;
        $this->ville = $cV ;
    }
    

    public function getAdresse() {


        return $this->add." ".$this->postal." ".$this->ville ;
    }
}


$anis = new Moi() ;

$anis->setAdresse("11 Rue Tripoli", 2080, "Ariana") ;

echo $anis->getAdresse() ;
