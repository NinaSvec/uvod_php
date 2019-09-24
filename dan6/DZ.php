<?php
//Napraviti funkciju koja ima 3 ulazna parametra
//autor (npr perić,pero), prikaz i veličina slova
//Prikaz ima dvije opcije (1.samo početno slovo imena + prezime 2.puno ime)
//Inicijalna veličina velika slova - zadani parametar  
//Ispisati imena 3 autora

// pomoć - if else, switch


/*1. p. peric
2. pero peric
3. P. PERIC
4. PERO PERIC */



// function autor($autor, $prikaz, $velicina)

/* function autor($autor){

    $autor_array = explode(',', $autor);
    //print_r($autor_array);
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    $ime_slovo = strtoupper(substr($ime, 0, 1));
    $prezime = ucfirst(strtolower($prezime));

    return $ime_slovo . '. ' . $prezime; 
}

echo autor('bArca,CAlderon');
// P. Peric
echo '<br>';
echo autor('gaBriel,MARQUEZ');*/

function autor($autor, $prikaz, $velicina = 'default'){
    $autor_array = explode(',', $autor);
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    switch ($prikaz) {
        case 'a':

            $txt = substr($ime,0,1).' '.$prezime;
            echo strtoupper($txt);
            break;
        case 'b':
            echo strtoupper($ime.' '.$prezime);
            break;
        default:
          echo 'nitko';
    }

}
 autor('peric,pero','h');
