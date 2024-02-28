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
            <p class="tx-1 mb-3">Variabel adalah sebuah nama yang diberikan pada sebuah ruang penyimpanan yang digunakan untuk menyimpan data.</p>
            <p class="tx-1 mb-3">Variabel dapat menyimpan berbag macam data, seperti angka, teks, boolean, array, ataupun objek.</p>
            <p class="tx-1 mb-3">Nama variabel harus unik dan tidak boleh sama dengan nama fungsi ataupun keyword yang telah ditentukan dalam bahasa pemrograman.</p>
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

                // Variable
                // di PHP variabel diaawali dangan tanda $
                // variabel adalah wadah
                // dan nama dari variable tidak bisa diawali dengan nomer
                // serta setiap nama variabel adalah case-sensitive
                // jenis variabel akan menyesuaikan sesuai isiannya jika isinya string maka begitu pula dengan variabelnya

                // dua cara untuk menamai variabel dengan benar

                // camel case
                $namaTaruna = "kazim";

                // snake case
                $nama_taruna = "deden";

                $angka1 = 10;
                $angka_1 = 10;
                $umur = 20;
                // echo digunakan untuk menampilkan data
                echo "$angka1 <br>";

                // var_dump() untuk melihat tipe data dan nilainya$
                var_dump($angka1);

                $data = [
                    "nama" => $namaTaruna,
                    "umur" => $umur,
                    "alamat" => 'indonesia'

                ];

                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>