<?php

    echo '<pre>';               // s obrasca prebaci na obradu
    print_r($_POST);  
    echo '</pre>';

    if (isset($_POST['submit'])) {

        if(!empty($_POST['ime']) && !empty($_POST['prezime'])){
        echo "Ime: $_POST[ime].<br>";
        echo "Prezime: $_POST[prezime].<br>";
        }else{
        echo 'Popunite sva polja!';
        }
    }else{
        header('Location:forma2_obrazac.php');
    }