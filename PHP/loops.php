<?php

$i = 0;
//while (ketika)
// ketika i kurang dari sama dengan 10 maka tambah 1 hingga nilai terpenuhi
while ($i <= 10 ) {
    echo "$i";
    $i++;
}

// do while (lakukan ketika)
// mirip seperti while, tapi ini hanya dilakukan sekali dimana variable i akan terus dimunculkan jika nilainya lebih kecil dari 6
do {
    echo "$i <br>";
    $i++;
  } while ($i < 6);

// for (untuk)
// untuk i jika kurang dari sama dengan 10 maka tambah 1, dan akan terus menghasilkan output sampai i bernilai 10 
for ($i = 0; $i <= 10; $i++) {
echo "The number is: $i <br>";
}
  
// foreach (untuk setiap)
// foreach akan menampilkan semua elemen dari array secara berurutan
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $i) {
  echo "$i <br>";
}

$x = 1;

// break
// break akan menghentikan perulangan ketika kondisinya terpenuhi
for ($x = 0; $x < 10; $x++) {
    // kondisi untuk menghentikan perulangan
    if ($x == 4) {
      break;
    }

    echo "The number is: $x <br>";
}

// continue
// continue akan melanjutkan perulangan ketika kondisinya terpenuhi sehingga ketika x bernilai 4, perulangan akan dilanjutkan ke nomer selanjutnya tanpa menapilkan the number is: 4
for ($x = 0; $x < 10; $x++) {
if ($x == 4) {
    continue;
}
echo "The number is: $x <br>";
}