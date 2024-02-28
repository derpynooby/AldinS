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
            <p class="tx-1 mb-3">echo dan print adalah dua perintah yang digunakan dalam PHP untuk mencetak atau menampilkan output ke layar. Namun, ada beberapa perbedaan antara kedua perintah tersebut.</p>
            <p class="tx-1 mb-3">Sintaks:</p>
            <p class="tx-1 mb-3">echo dapat menerima beberapa argumen, yang dipisahkan oleh koma (,).</p>
            <p class="tx-1 mb-3">print hanya dapat menerima satu argumen.</p>
            <p class="tx-1 mb-3">Kemampuan mengembalikan nilai:</p>
            <p class="tx-1 mb-3">echo tidak mengembalikan nilai.</p>
            <p class="tx-1 mb-3">print mengembalikan nilai 1 jika berhasil dieksekusi.</p>
            <p class="tx-1 mb-3">Kecepatan:</p>
            <p class="tx-1 mb-3">echo lebih cepat daripada print karena echo tidak mengembalikan nilai.</p>
            <p class="tx-1 mb-3">Penggunaan:</p>
            <p class="tx-1 mb-3">echo lebih sering digunakan daripada print karena lebih fleksibel dan cepat. Namun, print dapat digunakan ketika hanya perlu mencetak satu nilai.</p>
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


                // perbedaan antara echo dan print
                // echo
                // echo tidak mengembalikan nilai
                echo "Hello, World!"; // Output: Hello, World!

                // print
                // print mengembalikan nilai yaitu 1
                print "Hello, World!"; // Output: Hello, World!


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>