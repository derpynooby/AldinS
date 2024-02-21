<?php
include ("../../Dashboard/control.php");
echo $head1;


//variabel seperti $umur, value adalah isi, "" adalah string//

$umur = 6;

//jika kondisi terpenuhi maka lanjut ke kondisi selanjutnya dan jika tidak cocok maka pilihan lain akan masuk else
if ($umur < 10){
    echo "kurang cukup umur";
} elseif ( $umur < 15 ) {
    echo "sudah cukup umur";
} elseif( $umur > 20){
    echo "berlebihan";
}else{
    echo "gg";
}



    echo $footer1;
?>
