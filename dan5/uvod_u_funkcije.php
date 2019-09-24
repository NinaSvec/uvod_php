<?php

function ispis(){
    $c = 3 + 10;
    echo $c;               // ovo se neće ispisati jer je unutar funkcije
}

ispis();

echo '<br>';

function vrati (){
    $c = 10 + 5;
    return $c;
}

$d = vrati()+5;
echo $d;

echo '<br>';
// echo vrati();

function zbroji($a, $b){
    echo $a + $b;
}

zbroji(10,20);

echo '<br>';


function oduzmi ($a, $b){
    return $a - $b;
}

echo oduzmi (10, 30);