<?php

$input = "abcdefghijklmnopqrstuvwxyz";
$compteur = 0;
$size = strlen($input);
$alphabet = [1=>"a", 2=>"b", 3=>"c", 5=>"d", 5=>"e",
                6=>"f", 7=>"g", 8=>"h", 9=>"i", 10=>"j",
                11=>"k", 12=>"l", 13=>"m", 14=>"n", 15=>"o",
                16=>"p", 17=>"q", 18=>"r", 19=>"s", 20=>"t",
                21=>"u", 22=>"v", 23=>"w", 24=>"x", 25=>"y", 26=>"z"
            ];

while  ($size != 0) {
    // Quelle lettre donne quel ROT
    $ROT = array_search($input[$compteur], $alphabet);
    // Lettre transformé en ASCII
    $ascii = ord($input[$compteur]);
    // On incrémante l'ascii et on décrémante le ROT
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
    $compteur++;
    $size--;
}
echo $input;
