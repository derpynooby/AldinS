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
            <p class="tx-1 mb-3">switch adalah perintah kontrol yang digunakan dal bahasa pemrograman untuk membandingkan sebuah nilai dengan beberapa kasus atau kondisi.</p>
            <p class="tx-1 mb-3">Perintah switch akan mengevaluasi sebuah nilai atau variabel, dan kemudian mengeksekusi blok kode yang sesuai dengan kasus atau kondisi yang ditentukan.</p>
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

                // Switch
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

                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>