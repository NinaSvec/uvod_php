<?php

// skraćeni zapis if else statementa

$a = 3;
$b = 4;

if ($a == $b) {
    echo 'Varijable su jednake';
} else {
    echo 'Varijable nisu jednake';
}

echo '<br>';

($a == $b) ? print 'DA' : print 'NE';

//sve ispred upitnika je uvjet,? što učiniti ako je istina, iza : što učiniti ako uvjet nije zadovoljen

$retVal = (condition) ? a : b ;

// iftren