<?php

// predaja parametra putem reference

function potencija(&$val){

    $val = $val * $val;
}

$a = 2;
potencija($a);
echo $a;

// referenca na varijablu