<?php
// di PHP variabel diaawali dangan tanda $
// variabel adalah wadah
// dan nama dari variable tidak bisa diawali dengan nomer
// serta setiap nama variabel adalah case-sensitive
// jenis variabel akan menyesuaikan sesuai isiannya jika isinya string maka begitu pula dengan variabelnya
$angka1 = 10;
$angka_1 = 10;
$namataruna = "deden";
$nama_taruna = "deden";

//konstanta adalah data yang tidak bisa di ubah
define('PI', 3,14);
echo "luas lingkaran :" . $luaslingkaran . "<br>";

// var_dump() untuk melihat tipe data dan nilainya$
var_dump($angka1);

$data = [
    "nama" => $namataruna,
    "umur" => $umur,
    "almat" => 'indonesia'

];
