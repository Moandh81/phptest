<?php 


require "Vehicle.php" ;


class Voiture extends Vehicle {


    private $marque;
    private $annee ;
    private $prix;
    public static $count = 0  ;

    public static function  counter() {
        return $count++ ;
    }


    public function __construct($marque, $annee, $prix)
    {
        $this->marque = $marque ;
        $this->annee = $annee ;
        $this->prix = $prix;
        self::$count++ ;
    }

    public function getCounter() {
        return self::$count ;
    }


    public function freiner() {

        echo "Je freine comme une voiture" ;

    }



    public function getMarque() {

        return $this->marque ;
    }



    public function getAnnee() {

        return $this->annee ;
    }



    public function getPrix() {

        return $this->annee ;
    }



    public function setMarque($marque) {

        $this->marque = $marque ;
    }


    public function setAnnee($annee) {

        $this->annee = $annee ;
    }

    public function setPrix($prix) {
        $this->prix = $prix ;
    }
}