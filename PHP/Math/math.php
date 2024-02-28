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
            <p class="tx-1 mb-3">Dalam pemrograman, matematika digunakan dalam operasi aritmetis, seperti penjumlahan, pengurangan, perkalian, dan pembagian. Selain itu, matematika juga digunakan dalam logika dan algoritma, seperti dalam pengurutan data, pencarian data, dan pengolahan data.</p>
            <p class="tx-1 mb-3">Dalam PHP, matematika digunakan dalam operasi aritmetis, seperti dalam perhitungan luas dan volume, perhitungan waktu, dan lain-lain. Selain itu, matematika juga digunakan dalam logika dan algoritma, seperti dalam pengurutan data, pencarian data, dan pengolahan data.</p>
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

                // Math

                // PHP memiliki fungsi matematika yang bisa digunakan untuk menghitung bilangan

                // PHP pi() Function
                // berfungsi untuk mengembalikan nilai pi 22/7
                echo pi(); // 3.1415926535898

                // PHP min() and max() Functions
                // berfungsi untuk mengembalikan nilai terkecil dan terbesar
                echo min(0, 150, 30, 20, -8, -200); // -200
                echo max(0, 150, 30, 20, -8, -200); // 150

                // PHP abs() Function
                // berfungsi untuk mengembalikan nilai mutlak atau absolut yang merupakan kebalikan dari bilangan itu sendiri
                echo abs(-6.7); // 6.7

                // PHP sqrt() Function
                // berfungsi untuk mengembalikan akar kuadrat
                echo sqrt(64); // 8

                // PHP round() Function
                // berfungsi untuk membulatkan bilangan
                echo round(0.60); // 1
                echo round(0.49); // 0

                // Random Numbers
                // berfungsi untuk mengembalikan bilangan acak
                echo rand(1, 10);

                // PHP number_format() Function
                // berfungsi untuk memformat angka dengan format yang kita inginkan
                echo number_format(12345678, 2); // 12,345,678.00


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>