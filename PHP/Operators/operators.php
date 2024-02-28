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
            <p class="tx-1 mb-3">Operator adalah simbol atau kombinasi simbol yang digunakan dalam bahasa pemrograman untuk melakukan operasi terhadap satu atau lebih nilai atau variabel.</p>
            <p class="tx-1 mb-3">Operator dapat digunakan untuk melakukan operasi aritmatika, perbandingan, logika, dan assignment.</p>
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



                //jenis operator dalam php
                $x = 10;
                $y = 20;


                // penjumlahan
                echo "hasil penjumlahan: " . ($x + $y) . "<br>";

                // pengurangan
                echo "hasil pengurangan: " . ($x - $y) . "<br>";

                // perkalian
                echo "hasil perkalian : " . ($x * $y) . "<br>";

                // pembagian
                echo "hasil pembagian : " . ($x / $y) . "<br>";

                // modulus (sisa setelah dibagi)
                echo "hasil modulus : " . ($x % $y) . "<br>";

                // pangkat
                echo "hasil pangkat : " . ($x ** $y) . "<br>";



                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>