<?php
include ("../../Dashboard/control.php");
echo $head1;


// PHP memiliki fungsi matematika yang bisa digunakan untuk menghitung bilangan

// PHP pi() Function
// berfungsi untuk mengembalikan nilai pi 22/7
echo pi(); // 3.1415926535898

// PHP min() and max() Functions
// berfungsi untuk mengembalikan nilai terkecil dan terbesar
echo min(0, 150, 30, 20, -8, -200); // -200
echo max(0, 150, 30, 20, -8, -200); // 150

// PHP abs() Function
// berfungsi untuk mengembalikan nilai mutlak atau absolut yang merupakan kebalikan dari bilangan itu sendiri
echo abs(-6.7); // 6.7

// PHP sqrt() Function
// berfungsi untuk mengembalikan akar kuadrat
echo sqrt(64); // 8

// PHP round() Function
// berfungsi untuk membulatkan bilangan
echo round(0.60); // 1
echo round(0.49); // 0

// Random Numbers
// berfungsi untuk mengembalikan bilangan acak
echo rand(1, 10);

// PHP number_format() Function
// berfungsi untuk memformat angka dengan format yang kita inginkan
echo number_format(12345678, 2); // 12,345,678.00


echo $footer1;
?>

