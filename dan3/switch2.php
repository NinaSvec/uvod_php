<?php

$vrijeme = time();

echo $vrijeme;

echo '<br>';

echo date('d.m.Y. H:i:s',$vrijeme);

echo '<br>';

$dan = date('N')

// 1. Napraviti kod da kada se pokrene ispiše u kojem smo kvartalu godine na temelju trenutnog vremena
// 2. napraviti kod da kada se pokrene ispište koji je dan na temelju trenutnog vremena

switch ($dan) {
    case 1:
        echo 'Danas je ponedjeljak';
        break;
    case 2:
        echo 'Danas je ponedjeljak';
        break;
    case 3:
        echo 'Danas je ponedjeljak';
        break;
    case 4:
        echo 'Danas je ponedjeljak';
        break;
    
    default:
        # code...
        break;
}