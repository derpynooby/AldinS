<?php
include ("../../Dashboard/control.php");
echo $head1;


$x = 10;
$y = 20;

//jenis operator dalam php


// penjumlahan
echo "hasil penjumlahan: " . ($x + $y) . "<br>";

// pengurangan
echo "hasil pengurangan: " . ($x - $y) . "<br>";

// perkalian
echo "hasil perkalian  : " . ($x * $y) . "<br>";

// pembagian
echo "hasil pembagian  : " . ($x / $y) . "<br>";

// modulus (sisa setelah dibagi)
echo "hasil modulus    : " . ($x % $y) . "<br>";

// pangkat
echo "hasil pangkat    : " . ($x ** $y) . "<br>";


echo $footer1;
?>