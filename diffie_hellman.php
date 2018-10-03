<?php

$a = 12;
$g = 1;
$p= 244000;
$b= 128242;

$A = ($g ** $a) % $p;
$B = ($g ** $b) % $p;

$K_bob = ($A ** $b) % $p;
$K_alice = ($B ** $a) % $p;

echo "Alice : " . $K_alice . "<br>";
echo "Bob : " . $K_bob;
