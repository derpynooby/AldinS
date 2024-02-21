<?php
include ("../../Dashboard/control.php");
echo $head1;



//konstanta adalah data yang tidak bisa di ubah

// konstanta tanpa case sensitive
// define (string $name, mixed $value, boolean $case_insensitive [case sensitive dihilangkan pada versi php 7.3 sehingga jika digunakan di php 8.0 akan mengjasilkan warning])
define("PI", 3.14);
echo constant("PI");
echo PI;


// konstanta dengan case sensitive
const MyComputer = "asus";
echo MyComputer;



echo $footer1;
?>
            
