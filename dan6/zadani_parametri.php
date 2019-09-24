<?php

function ispisi_ime($ime = 'Nina', $polje = array()){
    echo "Vaše ime je: $ime.";
}

ispisi_ime('Nikolina', [8,9]);

/* ako proslijedimo vrijednost u funkciji bit će ispisana, ako joj ne zadamo, uzet će vrijednost
zadanu u varijabli */

