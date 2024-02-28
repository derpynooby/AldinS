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
            <p class="tx-1 mb-3">Dalam PHP, terdapat beberapa tipe data dasar, yaitu:</p>
            <p class="tx-1 mb-3">Integer: Merupakan tipe data yang menyimpan bilangan bulat.</p>
            <p class="tx-1 mb-3">Float: Merupakan tipe data yang menyimpan bilangan desimal.</p>
            <p class="tx-1 mb-3">String: Merupakan tipe data yang menyimpan karakter atau teks.</p>
            <p class="tx-1 mb-3">Boolean: Merupakan tipe data yang menyimpan nilai true atau false.</p>
            <p class="tx-1 mb-3">Array: Merupakan tipe data yang menyimpan beberapa nilai dalam satu variabel.</p>
            <p class="tx-1 mb-3">Object: Merupakan tipe data yang menyimpan kumpulan nilai dan metode.</p>
            <p class="tx-1 mb-3">Null: Merupakan tipe data yang menyimpan nilai kosong atau tidak ada nilai.</p>
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

                // tipe data di php

                // integer
                $angka = 100;
                var_dump($angka);

                // string
                $kata = "string";
                var_dump($kata);

                // float
                $angka_desimal = 10.5;
                var_dump($angka_desimal);


                // boolean
                $trueFalse = true;
                var_dump($trueFalse);


                // array
                $namataruna = "KAZIM";
                $umur = 17;
                $data = [
                    "nama" => $namataruna,
                    "umur" => $umur,
                    "alamat" => 'indonesia'

                ];
                var_dump($data);


                // object
                class Car
                {
                    public $color;
                    public $model;
                    public function __construct($color, $model)
                    {
                        $this->color = $color;
                        $this->model = $model;
                    }
                    public function message()
                    {
                        return "My car is a " . $this->color . " " . $this->model . "!";
                    }
                }

                $myCar = new Car("red", "Volvo");
                var_dump($myCar);

                // null VALUE
                $null = null;
                var_dump($null);


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>