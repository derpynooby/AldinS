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
            <p class="tx-1 mb-3">Sebuah direktori atau folder adalah sebuah tempat dimana file-file dan subdirektori disimpan dan dikelompokkan bersama dalam sistem operasi komputer. Direktori dapat dianggap sebagai sebuah kontainer yang berisi berbagai macam file dan subdirektori.</p>
            <p class="tx-1 mb-3">Direktori dapat memiliki nama dan lokasi tertentu dalam sistem file. Direktori teratas dalam sistem file disebut dengan direktori root. Direktori yang berada di bawah direktori root disebut dengan subdirektori.</p>
            <p class="tx-1 mb-3">Direktori dapat diakses dan dibaca oleh aplikasi dan program komputer. Direktori dapat diinisialisasi dan dibuat oleh pengguna atau aplikasi.</p>
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



                // dir() function
                // Fungsi dir() mengembalikan sebuah instance dari kelas Direktori. Fungsi ini digunakan untuk membaca direktori, yang mencakup hal-hal berikut:

                // Direktori yang diberikan dibuka
                // Dua pegangan properti dan jalur dir() tersedia
                // Properti pegangan dan jalur memiliki tiga metode: read(), rewind(), dan close()
                // echo dir("screenshot");


                // getcwd() function
                // mengembalikan nama direktori saat ini
                echo getcwd() . "<br>";


                // chdir() function
                // mengubah direktori saat ini
                // chdir("screenshot");


                // chroot() function
                // mengubah direktori root
                // chroot("screenshot");


                // opendir() function
                // membuka direktori
                // $dir = opendir("screenshot");


                // readdir() function
                // membaca direktori
                // echo readdir();


                // closedir() function
                // menutup direktori
                // closedir();


                // mkdir() function
                // membuat direktori
                mkdir("test");


                // rmdir() function
                // menghapus direktori
                rmdir("test");


                // rewinddir() function
                // kembali ke awal
                // rewinddir($dir);


                // scandir() function
                // berfungsi untuk mengecek(scan) jika ada kesalahan di direktori
                // echo scandir("screenshot");


                ?>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>