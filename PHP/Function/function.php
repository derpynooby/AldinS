<?php
include ("../../Dashboard/control.php");
echo $head1;


// fungsi berguna sebagai wadah sebuah perintah sehingga jika ingin menjalankan perintah 

function Tarunaname($nama){

    echo "Taruna $nama. <br>"  ;
}

// perintah akan aktif jika nama fungsi tersebut dipanggil

Tarunaname("kazim");  
Tarunaname("Ikhsan");  
Tarunaname("elgin");  
Tarunaname("deden");  


echo $footer1;
?>