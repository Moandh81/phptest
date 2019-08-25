<?php 

use PHPUnit\Framework\TestCase ;
require "Humain.php" ;

class HumainTest extends TestCase {


  



 public function additionProvider() {
    $anis = new Humain("anis", "dhouieb", 25 );
    return $anis;
}


     /**
     * @dataProvider additionProvider
     */
    public function test_if_human_has_prenom() {

    $this->assertEquals("anis", $this->anis->getPrenom()) ;
     
}



         /**
     * @dataProvider additionProvider
     */
public function test_if_human_has_age()
 {


    $this->assertEquals(25, $this->anis->getAge()) ;


 }





}