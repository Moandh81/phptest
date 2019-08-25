<?php 


require "anis.php" ;

class Maclasse {

    public $texte ;

    public function __construct($texte) {
        $this->texte = $texte ;
    }

    public function __toString()
    {
        return $this->texte ;
    }


    public function __debugInfo()
	{
		return ['texte' => fstat($this->texte)];
	}


}

$obj= new Maclasse("Hello World");

echo $obj;

echo "<br>" ;


echo __FILE__ ;
echo "<br>" ;

echo __DIR__ ;
echo "<br>" ;


echo __LINE__ ;
echo "<br>" ;


echo __FUNCTION__ ;
echo "<br>" ;


echo __CLASS__ ;
echo "<br>" ;