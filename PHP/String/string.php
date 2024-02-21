<?php
include ("../../Dashboard/control.php");
echo $head1;
$x = 10;


// String

// double quotes string
$myString = "This is a string enclosed in double quotes. $x";

// single quotes string
$myString = 'This is a string enclosed in single quotes. $x';

// panjang string
echo strlen($myString);

// hitung jumlah kata
echo str_word_count($myString);

// mencari kata dalam string
echo strpos($myString, "string");


// String Concatenate
// menggunakan .  (titik) untuk concatenate string (menggabungkan string)

// contoh
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z; // Output: HelloWorld (tanpa spasi)


// memberikan spasi
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName; 
echo $fullName; // Output: John Doe
// contoh lain menggunakan spasi
$x = "Halo";
$y = "Dunia";
$z = "$x $y";
echo $z; // Output: Hello World





// Modifikasi String

// ganti menjadi uppercase
echo strtoupper($myString);

// ganti menjadi lowercase
echo strtolower($myString);  

// ubah karakter
str_replace('a', 'e', $myString);
echo $myString;




echo $footer1;
?>
