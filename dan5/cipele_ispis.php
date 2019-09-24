<?php

require 'cipele.php';  //dohvaćanje drugog php dokumenta 

// ili include, razlika je količina pogreške
//include javlja grešku ako dokument nije pronađen
//require baca fatalnu grešku, zaustavlja izvođenje aplikacije

echo '<pre>';
print_r($cipele); 
echo '</pre>';

?>

<table  border = "1">
    <tr>
        <th>Marka</th>
        <?php
        $counter = 0;
            foreach ($cipele as $key => $cipela) {
                
                foreach ($cipela as $key => $value) {
                    if ($counter == 1){
                        break 2;
                    }
                    echo "<th>$key</th>";
                }  
            $counter++;
        }
        ?>
    </tr>
    <?php 
    foreach ($cipele as $marka => $cipela) {
        echo '<tr>';
            echo "<td>$marka</td>";
            echo "<td>$cipela[Veličina]</td>";
            echo "<td>$cipela[Boja]</td>";
            echo "<td>$cipela[Materijal]</td>";
            /*
            foreach ($value as $key => $value){
                echo "<td>$value</td>";
            }
            */
        echo '</tr>';
        }
    
    ?> 
</table>