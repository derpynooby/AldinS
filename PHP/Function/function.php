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
            <p class="tx-1 mb-3">Function adalah sebuah blok kode yang digunakan untuk melakukan suatu tindakan tertentu.</p>
            <p class="tx-1 mb-3">Function dapat digunan berulang kali dalam sebuah program atau skrip. Dengan menggunakan, kode dapat diorganisir dan dipisahkan menjadi bagian-bagian yang lebih kecil dan mudah dipahami.</p>
            <p class="tx-1 mb-3">Berikut adalah beberapa keuntungan dari menggunakan function:</p>
            <p class="tx-1 mb-3">Mengurangi jumlah kode yang diulang.</p>
            <p class="tx-1 mb-3">Memudahkan pemeliharaan kode.</p>
            <p class="tx-1 mb-3">Mempermudah pengujian kode.</p>
            <p class="tx-1 mb-3">Mempermudah penggabungan kode dari berbagai sumber.</p>
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


                // fungsi berguna sebagai wadah sebuah perintah sehingga jika ingin menjalankan perintah

                function Tarunaname($nama)
                {

                    echo "Taruna $nama. <br>";
                }

                // perintah akan aktif jika nama fungsi tersebut dipanggil

                Tarunaname("kazim");
                Tarunaname("Ikhsan");
                Tarunaname("elgin");
                Tarunaname("deden");

                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>