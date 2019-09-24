<?php

/*Napuniti polje s 10 elemenata
Ispisati vrijednost svakog elementa tako da su vrijednosti odvojene zarezom,
zadnja vrijednost na kraju ne smije imati zarez

Izbrisati prvi i zadnji element polja
ispisati vrijednost svakog elementa tako da su vrijednosti odvojene zarezom, 
zadnja vrijednost na kraju ne smije imati zarez

Sortirati polje uzlazno
ispisati vrijednost svakog elementa tako da su vrijednosti odvojene zarezom, 
zadnja vrijednost na kraju ne smije imati zarez */

for ($i=1; $i <=10 ; $i++) { 
    $brojevi[$i] = $i;
}



foreach ($brojevi as $broj) {
   
    if ($broj == 10) {

        echo $broj;
        break;
    }
    
    echo $broj.',';
}


echo '<br>';



arsort($brojevi);
foreach ($brojevi as $broj) {
   
    if ($broj == 1) {

        echo $broj;
        break;
    }
    
    echo $broj.',';
}

echo '<br>';

array_pop($brojevi);
array_shift($brojevi);

foreach ($brojevi as $broj) {
   
    if ($broj == 2) {

        echo $broj;
        break;
    }
    
    echo $broj.',';
}


// foreach ($a as $key => $value){
// if ($key+1 < count ($a){
// $value .= ', ';   BITNOOOOO
//}
//echo $value;

echo '<br>';

$brojčeki = implode(',', $brojevi);
echo $brojčeki;
