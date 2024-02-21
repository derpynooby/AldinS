<?php
include ("../../Dashboard/control.php");
echo $head1;


// di PHP variabel diaawali dangan tanda $
// variabel adalah wadah
// dan nama dari variable tidak bisa diawali dengan nomer
// serta setiap nama variabel adalah case-sensitive
// jenis variabel akan menyesuaikan sesuai isiannya jika isinya string maka begitu pula dengan variabelnya

// dua cara untuk menamai variabel dengan benar

// camel case
$namaTaruna = "kazim";

// snake case
$nama_taruna = "deden";

$angka1 = 10;
$angka_1 = 10;
$umur = 20;
// echo digunakan untuk menampilkan data
echo "$angka1 <br>";

// var_dump() untuk melihat tipe data dan nilainya$
var_dump($angka1);

$data = [
    "nama" => $namaTaruna,
    "umur" => $umur,
    "alamat" => 'indonesia'

];


echo $footer1;
?>
