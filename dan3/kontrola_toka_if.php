<?php


$a = 1;
$b = 5;

// operator usporedbe jednakosti
// uspoređuje vrijednost podatka ali ne uspoređuje tip podatka

if($a == 1){
    echo 'Istina je';
}
echo '<br>';

// operator usporedbe identičnosti
// uspoređuje vrijednost podatka i koji je tip podatka

if($a === 1){
    echo 'Isti tip podatka';
}

echo '<br>';

// operator nejednakosti
// uspoređuje vrijednost podatka ali ne uspoređuje tip podatka
if ($a != $b) {
    echo 'Nisu jednaki';
}

echo '<br>';

// operator nejednakosti
// uspoređuje vrijednost podatka i koji je tip podatka
if ($a !== $b) {
    echo 'Različit je tip podatka';
}