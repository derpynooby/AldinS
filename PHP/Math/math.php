
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
Tentang : Math php</pre>
        </div>
    
            <?php
            // PHP memiliki fungsi matematika yang bisa digunakan untuk menghitung bilangan

            // PHP pi() Function
            // berfungsi untuk mengembalikan nilai pi 22/7
            echo pi(); // 3.1415926535898

            // PHP min() and max() Functions
            // berfungsi untuk mengembalikan nilai terkecil dan terbesar
            echo min(0, 150, 30, 20, -8, -200); // -200
            echo max(0, 150, 30, 20, -8, -200); // 150

            // PHP abs() Function
            // berfungsi untuk mengembalikan nilai mutlak atau absolut yang merupakan kebalikan dari bilangan itu sendiri
            echo abs(-6.7); // 6.7

            // PHP sqrt() Function
            // berfungsi untuk mengembalikan akar kuadrat
            echo sqrt(64); // 8

            // PHP round() Function
            // berfungsi untuk membulatkan bilangan
            echo round(0.60); // 1
            echo round(0.49); // 0

            // Random Numbers
            // berfungsi untuk mengembalikan bilangan acak
            echo rand(1, 10);

            // PHP number_format() Function
            // berfungsi untuk memformat angka dengan format yang kita inginkan
            echo number_format(12345678, 2); // 12,345,678.00

            ?>
            
        </center>
    </div>
</body>
</html>
