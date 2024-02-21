<?php
include ("../../Dashboard/control.php");
echo $head1;



// dir() function
// Fungsi dir() mengembalikan sebuah instance dari kelas Direktori. Fungsi ini digunakan untuk membaca direktori, yang mencakup hal-hal berikut:

// Direktori yang diberikan dibuka
// Dua pegangan properti dan jalur dir() tersedia
// Properti pegangan dan jalur memiliki tiga metode: read(), rewind(), dan close()
// echo dir("screenshot");


// getcwd() function
// mengembalikan nama direktori saat ini
echo getcwd() . "<br>";


// chdir() function
// mengubah direktori saat ini
// chdir("screenshot");


// chroot() function
// mengubah direktori root
// chroot("screenshot");


// opendir() function
// membuka direktori
// $dir = opendir("screenshot");


// readdir() function
// membaca direktori
// echo readdir();


// closedir() function
// menutup direktori
// closedir();


// mkdir() function
// membuat direktori
mkdir("test");


// rmdir() function
// menghapus direktori
rmdir("test");


// rewinddir() function
// kembali ke awal
// rewinddir($dir);


// scandir() function
// berfungsi untuk mengecek(scan) jika ada kesalahan di direktori
// echo scandir("screenshot");



echo $footer1;
?> 
           
        