
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="https://www.pngall.com/wp-content/uploads/13/White-Circle-PNG.png" type="img">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Noob Sites</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    #body {
        display: flex;  
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url(https://i.pinimg.com/originals/b8/2f/28/b82f28a7e9c8fcb3868d3d94652c107c.gif);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-color: black;
        visibility: visible;
    }
    .wrapper {
        border: solid 3px white;
        width: 500px;
        border-radius: 40px;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(3px);
        color: white;
        animation: rainbow infinite 30s;

    }

    @keyframes rainbow {
        0%  { border-color: rgb(0, 0, 0);}
        12.5% { border-color: rgb(100,100,100)}
        25% { border-color: rgb(150,150,150);}
        37.5% { border-color: rgb(200,200,200);}
        50%{ border-color: rgb(255, 255, 255);}
        62.5% { border-color: rgb(200,200,200);}
        75% { border-color: rgb(150,150,150);}
        87.5% { border-color: rgb(100,100,100)}
        100%  { border-color: rgb(0, 0, 0);}
    }

    .border {
        background-color: rgba(0, 0, 0, 0.4);
        border: 3px solid;
        border-color: white;
        height: auto;
        width: auto;
        margin: 10%;
        color: white;
        border-radius: 20px;
        backdrop-filter: blur(5px);
    } 

    pre {
        color: white;
    }
 
</style>

<body id="body">
    <div class="wrapper">
        <center>

        <div class="border alt">
            <pre> Nama : M. Kazim Aldin S.
Kelas : XI RPL
Tentang : Looping php</pre>
        </div>
    
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

          ?>
           
        </center>
    </div>
</body>
</html>
