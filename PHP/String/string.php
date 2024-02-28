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
            <p class="tx-1 mb-3">String adalah sebuah urutan karakter yang diwakili oleh sebuah variabel atau nilai. String dapat berisi teks, angka, atau karakter spesial.</p>
            <p class="tx-1 mb-3">String dapat dideklarasikan dan diinisialisasi menggunakan tanda kutip tunggal atau tanda kutip ganda.</p>
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


                // String
                $x = 10;


                // double quotes string
                $myString = "This is a string enclosed in double quotes. $x <br>";

                // single quotes string
                $myString = 'This is a string enclosed in single quotes. $x <br>';

                // panjang string
                echo strlen($myString)."<br>";

                // hitung jumlah kata
                echo str_word_count($myString)>"<br>";

                // mencari kata dalam string
                echo strpos($myString, "string")."<br>";


                // String Concatenate
                // menggunakan . (titik) untuk concatenate string (menggabungkan string)

                // contoh
                $x = "Hello";
                $y = "World";
                $z = $x . $y;
                echo $z."<br>"; // Output: HelloWorld (tanpa spasi)


                // memberikan spasi
                $firstName = "John";
                $lastName = "Doe";
                $fullName = $firstName . " " . $lastName;
                echo $fullName."<br>"; // Output: John Doe
                // contoh lain menggunakan spasi
                $x = "Halo";
                $y = "Dunia";
                $z = "$x $y";
                echo $z."<br>"; // Output: Hello World





                // Modifikasi String

                // ganti menjadi uppercase
                echo strtoupper($myString);

                // ganti menjadi lowercase
                echo strtolower($myString);

                // ubah karakter
                str_replace('a', 'e', $myString);
                echo $myString;



                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>