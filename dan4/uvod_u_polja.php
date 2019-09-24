<?php

// prvi način
$cipele = array();

$cipele[0] = 'Gucci';  // [] = ključ, indeksna polja kad su brojevi, asocijativna polja ako su stringovi
$cipele[1] = 'Adidas';
$cipele[2] = 'Nike';
$cipele[3] = 'Puma';
$cipele[4] = 'Vans';

$cipele5 = [1 => 'Gucci', 12 =>'Adidas', 23 =>'Nike', 34 =>'Puma', 5 =>'Vans'];

echo '<pre>';
print_r($cipele5);
echo '</pre>';

echo 'Element na drugom mjestu polja $cipele je '. $cipele[1].'<br>';

echo 'Polje $cipele sastoji se od ' .count($cipele). ' elemenata.';

echo '<br>';

// drugi način
$cipele2 = array();

$cipele2[] = 'Gucci';  
$cipele2[] = 'Adidas';
$cipele2[] = 'Nike';
$cipele2[] = 'Puma';
$cipele2[] = 'Vans';

echo '<br>';

// treći način

$cipele3 = array('Gucci', 'Adidas', 'Nike', 'Puma', 'Vans');

echo '<br>';

// čestvrti način

$cipele4 = ['Gucci', 'Adidas', 'Nike', 'Puma', 'Vans'];

echo '<br>';

for ($i=0; $i < count($cipele); $i++) { 
    echo $cipele[$i].'<br>';
}
echo '<br>';

for ($i=0; $i < count($cipele); $i++) { 
    echo $cipele[$i].'<br>';
}

foreach ($cipele5 as $key => $value) {
    echo $key . '.'. $value. '<br>';
}