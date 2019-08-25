<?php

use PHPUnit\Framework\TestCase;

require "Humain.php" ;

class HumainTest extends  TestCase{


    public  $anis ;
    public $tableau ;

// public static function setUpBeforeClass()
// {
//     self::$anis = new Humain("anis", "dhouieb", 25) ;
// }


public function setUp() {
    $this->anis = new Humain("anis", "dhouieb", 25) ;
   

}

    public function test_if_human_has_age() {
        $this->assertEquals("anis" , $this->anis->getPrenom()) ;
    }

    public function test_if_len_tableau_is_correct() {
        $tableau = [1,2,3] ;
        $this->assertEquals(3,count($tableau)) ;
    }
}
