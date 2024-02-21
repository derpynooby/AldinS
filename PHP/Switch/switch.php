<?php
include ("../../Dashboard/control.php");
echo $head1;


$color = "red";
// jika kondisi(case) tidak terpenuhi maka lanjut ke kondisi(case) berikutnya jika tidak cocok semua maka akan masuk pada pilihan default
switch ($color) {
case "red":
    echo "pdi perjuangan";
    break;
case "blue":
    echo "lautan biru";
    break;
case "black":
    echo "muka anda hitam";
    break;
default:
    echo "kurang beruntung";
    break;
}


echo $footer1;
?>
