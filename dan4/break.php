<?php

$a = 1; // npr umjesto 10 popis korisnika, želimo pronaći konkretnog, if ime, nina švec


while($a <= 10){  
    echo $a.'<br>';     
    
    if ($a == 5){
        echo 'PET! <br>';
    }

     if ($a == 8) {
       break;  // prekida switch i petlju i ide na kraj

    }
    $a++;
}

echo '<h1>PRIMJER DRUGI</h1>';

$a = 1;
$b = 1;


while($a <= 10){  
    echo '<br>';     
    
    while ($b <= 10) {
        echo $b;

    if ($b == 8){
        break 2;
        }
        $b++;
    }
    $b =1;
    $a++;
}