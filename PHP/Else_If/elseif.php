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
            <p class="tx-1 mb-3">else if adalah sebuah kondisi yang digunakan dalam bahasa pemrograman untuk mengevaluasi kondisi yang lebih spesifik setelah kondisi if dan else if sebelumnya di-evaluasi.</p>
            <p class="tx-1 mb-3">else if digunakan ketika kita ingin mengevaluasi kondisi yang lebih spesifik jika kondisi if dan else if sebelumnya tidak terpenuhi.</p>
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



                // Else If

                $umur = 6;
                //jika kondisi terpenuhi maka lanjut ke kondisi selanjutnya dan jika tidak cocok maka pilihan lain akan masuk else
                if ($umur < 10) {
                    echo "kurang cukup umur";
                } elseif ($umur < 15) {
                    echo "sudah cukup umur";
                } elseif ($umur > 20) {
                    echo "berlebihan";
                } else {
                    echo "gg";
                }


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>