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
            <p class="tx-1 mb-3">Casting dalam PHP adalah proses mengubah tipe data suatu variabel menjadi tipe data lain.</p>
            <p class="tx-1 mb-3">Casting dapat dilakukan dengan menggunakan operator tertentu yang menunjukkan tipe data yang ingin dicapai.</p>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="card-body pb-3">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10">result</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <div class='bg-black text-success rounded-10 card-body pd-y-7' style="min-height: 100px;"'>
                <?php





                // Casting
                // Mengubah tipe data menjadi tipe data yang diinginkan

                $a = 5; // Integer
                $b = 5.34; // Float
                $c = "25 kilometers"; // String
                $d = "kilometers 25"; // String
                $e = "hello"; // String
                $f = true; // Boolean
                $g = NULL; // NULL

                // Casting Integer
                $a = (int) $a;
                $b = (int) $b;
                $c = (int) $c;
                $d = (int) $d;
                $e = (int) $e;
                $f = (int) $f;
                $g = (int) $g;

                // Casting Float
                $a = (float) $a;
                $b = (float) $b;
                $c = (float) $c;
                $d = (float) $d;
                $e = (float) $e;
                $f = (float) $f;
                $g = (float) $g;

                // Casting String
                $a = (string) $a;
                $b = (string) $b;
                $c = (string) $c;
                $d = (string) $d;
                $e = (string) $e;
                $f = (string) $f;
                $g = (string) $g;

                // Casting Boolean
                $a = (bool) $a;
                $b = (bool) $b;
                $c = (bool) $c;
                $d = (bool) $d;
                $e = (bool) $e;
                $f = (bool) $f;
                $g = (bool) $g;

                // Casting NULL
                // unset not supported in php 8.0
                // $a = (unset) $a;
                // $b = (unset) $b;
                // $c = (unset) $c;
                // $d = (unset) $d;
                // $e = (unset) $e;
                // $f = (unset) $f;
                // $g = (unset) $g;

                // Casting Object
                $a = (object) $a;
                $b = (object) $b;
                $c = (object) $c;
                $d = (object) $d;
                $e = (object) $e;
                $f = (object) $f;
                $g = (object) $g;

                // Casting Array
                $a = (array) $a;
                $b = (array) $b;
                $c = (array) $c;
                $d = (array) $d;
                $e = (array) $e;
                $f = (array) $f;
                $g = (array) $g;

               



                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>