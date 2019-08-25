<?php 


function division($x, $y){


    if($y == 0) {

        throw new Exception('Division par zéro impossible') ;
    }

    return $x /$y ;

}


try {

    division(5, 2) ;
    division(4,0) ;

}

catch(Exception $e) {
    var_dump($e) ;
    echo "Exception capturée :".$e->getFile() ;
}