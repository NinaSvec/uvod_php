<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Vježba 2</title>

    <?php

    echo 'Malo se igram';

    ?>
<br>

</head>

<body>

    <table align = 'center'>

    <caption> Igrači </caption>

    <br>
<?php

        $ime = 'Nikolina';
        $prezime = 'Švec';
        $adresa = 'Vrtni put';
        <tr>
            <th>ime</th>
            <th>prezime</th>
            <th>adresa</th>
        </tr>
        <tr>
            <td>$ime</td>
            <td>$prezime</td>
            <td>$adresa</td>
        </tr>
        <tr>
            <td>Mateja</td>
            <td>Jasak</td>
            <td>Vrtni put</td>
        </tr>
?>
        <tr>
            <td>$ime</td>
            <td>$prezime</td>
            <td>$adresa</td>
        </tr>
    </table>
</body>
</html>