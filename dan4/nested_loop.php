<?php

$a = 1;
$b = 1;

while ($a <=10){
    
    $a++;
    while ($b <=10){  // ova petlja se vrti unutar sebe dok se ne izvrši, onda ide na gornju
        echo 'b='.$b;
        $b++;
    }
    $a++;
    echo '<br>';
    $b = 1;
}

// tablica množenja

