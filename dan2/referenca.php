<?php

$a = 500;
$b = &$a; // referenca (pointer) na memorijsku lokaciju varijable $a

echo'a='.$a;
echo '<br>';
echo 'b='.$b; //ono što piše u varijabli a pisat će i u varijabli $b

