<?php

echo "Tekst za probu";
echo '<br>';

//Varijable

$ime = 'Nina'; // -> ova vrsta podataka naziva se String (niz znakova)
$dob = 30; // -> ova vrsta podataka naziva se Integer (cijeli broj)
$masa = 57.5; // -> ova vrsta podataka naziva se Float (decimalni broj)
$hobiji = array('biciklizam', 'planinarenje', 'trčanje'); // -> array (polje podataka)
$samac = false; // booleasn (logička vrijednost)

echo $ime.'<br>'.$masa.' <p>'; // točka je operator spajanja stringova (konkatenacija)
echo $dob.'<br>';

// echo $hobiji; // Array se ne može ispisivati na ovaj način

echo $samac; 
echo '<br>';

var_dump($samac);
echo $dob.'<br>';

echo "Moje ime je $ime.";
echo '<br>';
echo 'Moje ime je '.$ime.'.';
echo '<br>';
echo 'Moje ime je $ime'; // resolvanje varijabli unutar stringa, moraju biti dvostruki navodnici

//Promjena vrijednosti varijable 

?>