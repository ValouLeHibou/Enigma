<?php

$input = "Salut";
$compteur = 0;
$size = strlen($input);
$cadran1 = 1;
$cadran2 = 1;
$cadran3 = 1;

while  ($size != 0) {
    $ROT = $cadran1 . $cadran2 . $cadran3;
    $ascii = ord($input[$compteur]);
    while ($ROT != 0) {
        if ($ascii == 122) {
            $ascii = 97;
        }
        elseif ($ascii == 132) {
            $ascii = 101;
        }
        else {
            $ascii++;
        }
        $ROT--;
    }
    // On repasse l'ascii en lettre
    $input[$compteur] = chr($ascii);
    $cadran1++;
    $cadran2++;
    $cadran3++;
    if ($cadran1 > 2) {
        $cadran1 = 1;
    }
    if ($cadran2 > 3) {
        $cadran2 = 1;
    }
    if ($cadran3 > 5) {
        $cadran3 = 1;
    }
    $compteur++;
    $size--;
}
echo $input;