<?php

$brojevi = array();

for ($i=1; $i <= 100; $i++) {  

    $brojevi[$i] = $i;  // $i je u ovom slučaju key i value / zadano je da je indeks/key od polja brojevi jednak varijabli $i
                        // i ključ i vrijednost rastu za 1 sa svakom petljom
}

foreach ($brojevi as $broj) {
    
    echo $broj.'<br>';
}


// petak je polje podataka, učenica, jel platila il nije