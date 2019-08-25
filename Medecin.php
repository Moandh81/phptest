<?php 


require "Humain.php" ;


class Medecin extends Humain {


    public $specialite ;
    public static $compteur = 0 ;

    public function __construct($prenom, $nom, $age , $specialite) {

        parent::__construct($prenom, $nom, $age) ;
        $this->specialite = $specialite ;
        self::$compteur++ ;
    }


    public function getSpecialite() {

        return $this->specialite;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }



    public function getNom() {

        return strtoupper($this->nom) ;
    }


}