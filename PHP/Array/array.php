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
            <p class="tx-1 mb-3">Array adalah struktur data yang menyimpan beberapa elemen yang berada dalam urutan tertentu.</p>
            <p class="tx-1 mb-3">Elemen dalam array dapat berupa variabel, fungsi, atau objek.</p>
            <p class="tx-1 mb-3">Array dalam PHP dapat dideklarasikan menggunakan tanda kurung siku [] atau fungsi array().</p>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="card-body pb-3">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10">result</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <div class='bg-black text-success rounded-5 card-body pd-y-7' style="min-height: 100px;">
                <?php

                function myFunction()
                {
                    echo "This text comes from a function <br>";
                }


                // Array
                // array menyimpan lebih dari 1 data dalam satu variabel dengan format [index][0] = data ke -1, [index][1] = data ke -2, dst.
                $cars = array("Volvo", "BMW", "Toyota");

                // array dapat menyimpan data berupa tipe data apapun diantaranya seperti string, integer, float, boolean, array, dan object.
                $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());


                // Jenis Array

                // Indexed Array
                // Array yang indexnya dimulai dari 0
                $indexedArray = array("Apple", "Banana", "Orange");

                // Associative Array
                // Array yang memiliki key dan value
                $associateArray = array("Name" => "John", "Age" => 30, "City" => "New York");





                //count()
                // berfungsi untuk menghitung panjang array
                echo count($cars), "<br>"; // Output: 3

                //print_r()
                // berfungsi untuk menampilkan isi dari array secara detail
                print_r($myArr) . "<br>"; // Output: Array ( [0] => Volvo [1] => 15 [2] => Array ( [0] => apples [1] => bananas ) [3] => )

                //array_push()
                // berfungsi untuk menambahkan data ke array
                array_push($cars, "Honda");

                //array_pop()
                // berfungsi untuk mengeluarkan data dari array terakhir
                array_pop($cars);

                //array_unshift()
                // berfungsi untuk menambahkan data ke awal array
                array_unshift($cars, "Yamaha");

                //array_shift()
                // berfungsi untuk mengeluarkan data dari awal array
                array_shift($cars);

                //array_splice()
                // berfungsi untuk memotong array
                array_splice($cars, 1, 0, "Mercedes");

                //array_key_exists()
                // berfungsi untuk mengecek apakah array memiliki index atau tidak
                if (array_key_exists(0, $cars)) {
                    echo $cars[0], "<br>";
                }

                //in_array()
                // berfungsi untuk mengecek apakah array terdapat data yang sama dengan data lainnya
                if (in_array("BMW", $cars)) {
                    echo "Yes, 'BMW' is in the cars array <br>";
                }

                //array_merge()
                // berfungsi untuk menggabungkan array dengan array lain
                $cars = array_merge($cars, ["Nissan", "Mazda"]);

                //array_reverse()
                // berfungsi untuk membalikkan urutan array
                $cars = array_reverse($cars);

                //array_search()
                // berfungsi untuk mengecek apakah array terdapat data yang sama dengan data lainnya dan kembali nilai indeksnya
                $result = array_search("BMW", $cars);
                echo "The result of searching for 'BMW' is: " . $result . "<br>";

                //array_keys()
                // berfungsi untuk mengembalikan array index dari array tertentu
                $indexes = array_keys($cars, "BMW"); // returns [2]

                // implode()
                // berfungsi untuk mengubah array menjadi string dengan pemisah
                $string = implode(", ", $cars);
                echo $string . "<br>";

                //explode()
                // berfungsi untuk mengubah string menjadi array dengan pemisah
                $cars = explode(", ", $string);
                print_r($cars) . "<br>";




                //sort(), asort() & ksort()
                // sort() mengurutkan array secara ascending
                sort($cars);
                print_r($cars) . "<br>"; // Output: Array ( [0] => BMW [1] => Mercedes [2] => Nissan [3] => Toyota )

                // asort() mengurutkan array secara ascending dan memberi keynya juga diurutkan
                asort($cars);
                print_r($cars) . "<br>"; // Output: Array ( [1] => Mercedes [2] => Nissan [3] => Toyota [0] => BMW )

                // ksort() mengurutkan array secara ascending dan memberi keynya juga diurutkan
                ksort($cars);
                print_r($cars) . "<br>"; // Output: Array ( [0] => BMW [1] => Mercedes [2] => Nissan [3] => Toyota )

                //rsort(), rsort() & krsort()
                // rsort() mengurutkan array secara descending
                rsort($cars);
                print_r($cars) . "<br>"; // Output: Array ( [0] => Toyota [1] => Nissan [2] => Mercedes [3] => BMW )







                ?>
            </div>
        </div>
    </div>
</div>

<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>