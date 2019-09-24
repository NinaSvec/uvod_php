<?php

// indeksna i asocijativna polja
// indeksi idu po brojevima
// asocijativni - ključevi mogu biti stringovi

$korisnik1 = array('ime' => 'Ivan', 'prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');
$korisnik2 = array('ime' => 'Pero', 'prezime' => 'Perić', 'dob' => 25, 'mjesto' => 'Zagreb');

$korisnik3 = array();
$korisnik3['ime'] = 'Vanja';
$korisnik3['prezime'] = 'Vanjić';
$korisnik3['dob'] = 33;
$korisnik3['mjesto'] = 'Varaždin';

$korisnici = array($korisnik1, $korisnik2, $korisnik3);

$korisnici[4]['ime'] = 'Iva';
$korisnici[4]['prezime'] = 'Ivić';
$korisnici[4]['dob'] = 44;
$korisnici[4]['mjesto'] = 'Gorica';


    echo '<pre>';
    print_r($korisnici);  //debugiranje
    echo '</pre>';

    foreach ($korisnici as $korisnik) {
        foreach ($korisnik as $value) {
            echo $value;
            echo '<br>';
        }
    }

    

    ?>
