<?php 


function moyenne(int $note1 , int $note2 , int $note3, int $note4=null, int $note5=null) {

        $total = func_num_args() ;
        echo __FUNCTION__ ;
     echo ($note1 + $note2 + $note3 + $note4 + $note5)/$total ;
}


moyenne(10,11,12,13,14) ;