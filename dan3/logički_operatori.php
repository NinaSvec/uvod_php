<?php


$a = 15;
$b = 10;
$c = 5;

// Logičko i (and), traži da su zadovoljeni svi uvjeti u nizu
if ($b < $a && $c < $a && 8 < 3) {
    echo 'Uvjet je zadovoljen';
} else {
    echo 'Uvjet nije zadovoljen';
}
// & i and ovdje nisu isti, logičko & (&&) je brže i provjerava uvjet

echo '<br>';


// Logičko ili (or) istinit dio iskaza prije || ili iza ||
if ($b < $a && $c < $a ||  8 < 3) {
    echo 'Uvjet je zadovoljen';
} else {
    echo 'Uvjet nije zadovoljen';
}

echo '<br>';

if (($b > $a && $b < $c) ||  ($b < $a && $b > $c)) {
    echo 'Vrijednost varijable b nalazi se između $a i $c';
}

echo '<br>';

// Logičko ne // uskličnik okreće vrijednost u false

if (!$a) {
    echo 'Varijabla $a postoji';
}else {
    echo 'Varijabla $a ne postoji';
}
