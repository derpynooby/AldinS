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
            <p class="tx-1 mb-3">Dalam PHP, konstanta adalah variabel yang tidak bisa diubah setelah dideklarasikan.</p>
            <p class="tx-1 mb-3">Konstanta dapat dideklarasikan menggunakan fungsi define() atau menggunakan kata kunci const.</p>
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



                //konstanta adalah data yang tidak bisa di ubah

                // konstanta tanpa case sensitive
                // define (string $name, mixed $value, boolean $case_insensitive [case sensitive dihilangkan pada versi php 7.3 sehingga jika digunakan di php 8.0 akan mengjasilkan warning])
                define("PI", 3.14);
                echo constant("PI");
                echo PI;


                // konstanta dengan case sensitive
                const MyComputer = "asus";
                echo MyComputer;


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>