<form method="POST">
    <p>
        <label for="ime">Ime:</label>
        <input type="text" name="ime">
    </p>
    <p>
        <label for="prezime">Prezime:</label>
        <input type="text" name="prezime">
    </p>
    <p>
        <input type="submit" name ="submit" value="Pošalji">
    </p>
</form>

<?php



if (isset($_POST['submit'])){  // ako je netko kliknuo submit, ako nije neće se izvršiti
    echo '<pre>';               // ako je prikazat će 
    print_r($_POST);  
    echo '</pre>';

    if($_POST['ime']=== ''){
        echo "Ime nije postavljeno!";
    }else{
        echo "Ime je postavljeno!";
    }
}

/* ili if(!empty($_POST['ime])) && !empty($_POST['prezime'])){
    echo "Ime: $_POST[ime].<br>";
    echo "Prezime: $_POST[prezime].<br>";
}else{
    echo 'Popunite sva polja!';
}
} */

