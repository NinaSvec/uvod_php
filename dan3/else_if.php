
<?php

// način produživanja if-a

$naziv = 'Algebra';

$duljina = strlen($naziv);

echo $duljina;

// strlen (string $string) : int, vraća int vrijednost stringa

echo '<br>';

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina >= 5 && $duljina <= 10){
    echo 'Naziv je u zadanom nizu između 7 i 10';
}else{
    echo 'Naziv je prekratak';
}
    
echo '<br>';

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina == 9 ){
    echo 'Naziv ima 9 znakova';
}elseif($duljina == 8){
    echo 'Naziv ima 8 znakova';
}else{
    echo 'Naziv je prekratak';
}

echo '<br>';
echo '<br>';

$a = ''; //logička vrijednost false
$b = '';

if(empty($a)){
    if(empty($b)){
        echo 'Varijabla B je prazna<br>';
        echo 'Varijabla A je prazna<br>';
    }else{
        echo 'Varijabla B nije prazna<br>';
        echo 'Varijabla A je prazna<br>';
    }
    
}else{
    if (empty($b)) {
        echo 'Varijabla B je prazna<br>';
        echo 'Varijabla A nije prazna<br>';
    } else {
        echo 'Varijabla A nije prazna<br>';
        echo 'Varijabla A nije prazna<br>';
    }

}
echo '<br>';

if(empty($a) && empty($b)){
    echo 'Varijabla B je prazna<br>';
    echo 'Varijabla A je prazna<br>';
}elseif(empty($a) && !empty($b)){
    echo 'Varijabla B nije prazna<br>';
    echo 'Varijabla A je prazna<br>';
}
elseif(!empty($a) && empty($b)){
    echo 'Varijabla B je prazna<br>';
    echo 'Varijabla A nije prazna<br>';
}