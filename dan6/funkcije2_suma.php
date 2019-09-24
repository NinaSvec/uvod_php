<?php

$polje = [1,5,7,9,12,34];

function suma($a){

    $zbroj = 0;
    foreach ($a as $value) {  //a je nova varijabla u funkciji, da se zove polje ne bi bila ista kao gornja
        $zbroj += $value;
    }
    return $zbroj;
}
echo suma($polje);