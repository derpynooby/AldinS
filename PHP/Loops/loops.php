<?php
require_once("../../Dashboard/header.php");
require_once("../../Dashboard/sidebar.php");
require_once("../../Dashboard/repeated-content.php");

?>
<!-- row -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
    <div class="card overflow-hidden">
        <div class="card-body pb-3">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10">definition &amp; use</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-1 mb-3">Array adalah struktur data yang menyimpan beberapa elemen yang berada dalam urutan tertentu.</p>
            <p class="tx-1 mb-3">Elemen dalam array dapat berupa variabel, fungsi, atau objek.</p>
            <p class="tx-1 mb-3">Array dalam PHP dapat dideklarasikan menggunakan tanda kurung siku [] atau fungsi array().</p>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="card-body pb-3">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10">result</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>            
            <div class='bg-black text-success rounded-10 card-body pd-y-7' style="min-height: 100px;">
                <?php

                // Loops
                
                $x=1; 
                $i = 0;
                //while (ketika)
                // ketika i kurang dari sama dengan 10 maka tambah 1 hingga nilai terpenuhi
                while ($i <= 10) {
                    echo "$i <br>";
                    $i++;
                } 
                
                // do while (lakukan ketika) 
                // mirip seperti while, tapi ini hanya dilakukan sekali dimana variable i akan terus dimunculkan jika nilainya lebih kecil dari 6 
                do { echo "$i <br>" ; $i++; } 
                while ($i < 6); 
                
                // for (untuk) 
                // untuk i jika kurang dari sama dengan 10 maka tambah 1, dan akan terus menghasilkan output sampai i bernilai 10 
                for ($i=0; $i <=10; $i++) {
                     echo "The number is: $i <br>" ; 
                    } 
                
                // foreach (untuk setiap) 
                // foreach akan menampilkan semua elemen dari array secara berurutan 
                $colors=array("red", "green" , "blue" , "yellow" ); 
                foreach ($colors as $i) {
                     echo "$i <br>" ; 
                    } 
                
                // break 
                // break akan menghentikan perulangan ketika kondisinya terpenuhi 
                for ($x=0; $x < 10; $x++) { 
                    // kondisi untuk menghentikan perulangan 
                    if ($x==4) { break; } echo "The number is: $x <br>" ; } 
                    
                // continue 
                // continue akan melanjutkan perulangan ketika kondisinya terpenuhi sehingga ketika x bernilai 4, perulangan akan dilanjutkan ke nomer selanjutnya tanpa menapilkan the number is: 4 
                for ($x=0; $x < 10; $x++) { 
                    if ($x==4) { 
                        continue; 
                    } 
                    echo "The number is: $x <br>" ; }; 


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>