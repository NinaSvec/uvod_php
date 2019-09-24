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

foreach ($korisnik3 as $ključ => $vrijednost) {  //za prolaženje kroz elemente polja
    echo "$ključ -> $vrijednost <br>";           //njoj predajemo ključ i podatak o korisniku
}
    echo '<pre>';
    print_r($korisnik1);  //debugiranje
    echo '</pre>';

    ?>

<table width="50" border="1">
    <!-- ZAGLAVLJE TABLICE -->
    <tr>
        <?php
            foreach ($korisnik3 as $key => $value): 
        ?>
        
        <th><?php echo $key ?></th>
        <?php
            endforeach;
        ?>
    </tr>

    <!-- PODATCI O KORISNIKU -->
    <tr>
        <td><?php  echo $korisnik3['ime']?></td>
        <td><?php  echo $korisnik3['prezime']?></td>
        <td><?php  echo $korisnik3['dob']?></td>
        <td><?php  echo $korisnik3['mjesto']?></td>
    </tr>

    <tr>
        <td><?php  echo $korisnik2['ime']?></td>
        <td><?php  echo $korisnik2['prezime']?></td>
        <td><?php  echo $korisnik2['dob']?></td>
        <td><?php  echo $korisnik2['mjesto']?></td>
    </tr>
</table>