<?php


function printArr( $num){
    for($x=0; $x<sizeof($num);$x++){
        echo "$num[$x] <br>";

    }
}


function largest($lrg){
    $start = 0;
    for($x=0;$x<sizeof($lrg);$x++){
        if($lrg[$x] >$start){
            $start=$lrg[$x];
        }
    }
    return $start;
}