<?php

echo '<h1>Primjer prvi</h1>';
$a = 1;
$b = 1;

echo "<table><tr>";

while($a<=10){
    
    while($b<=10){
        echo "<td>".$a*$b."</td>";
        $b++; 
    }
    
    echo "</tr><tr>";
    
    $b=1;
    $a++;
}
echo "</tr></table>";


echo '<br>';



echo '<h1>Primjer drugi</h1>';

$i = 1;
$j = 1;


echo "<table><tr>";
for ($i=1; $i <= 10 ; $i++) { 
    for ($j=1; $j <= 10 ; $j++) { 
        echo "<td>".$i*$j."</td>";
    }
echo "</tr><tr>";
}
echo "</tr></table>";
?>