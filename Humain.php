<?php 



class Humain {


    protected $nom ;
    protected $prenom ;
    protected $age ;


    public function __construct(string $prenom, string $nom,  int $age)
    {
        $this->prenom = $prenom ;
        $this->nom = $nom;
        $this->age = $age ;
    }



    public function getPrenom() {

        return $this->prenom ;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom  ;
    }


    // comment


    public function getNom() {

        return $this->nom ;
    }

    public function setNom($nom) {
        $this->nom = $nom  ;
    }

    public function getAge() {

        return $this->age ;

    }


    public function setAge($age) {
        $this->age = $age ;
    }
}
