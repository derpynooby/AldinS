<?php
include ("../../Dashboard/control.php");
echo $head1;


// menjadikan variable $conn sebagai wadah untuk perintah koneksi ke database
$conn = mysqli_connect('localhost','root','','test');


// mendefinisikan variabel untuk wadah dari data yang di input
$username = ["username"];
$password = ["password"];
$class = ["class"];
$age = ["age"];

// fungsi input data ke database
// jika element dengan nama submit ditekan
if (isset($_POST["submit"])){

    // htmlspecialchars() adalah fungsi untuk mengubah karakter khusus
    //$_POST["username"] mengambil data dari name="username" pada form
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $class = htmlspecialchars($_POST["class"]);
    $age = htmlspecialchars($_POST["age"]);
   
    // password_hash() adalah fungsi untuk membuat password terenkripsi
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // query untuk memasukkan data ke database
    $query = "INSERT INTO data VALUES('', '$username', '$class', '$age', '$hashedPassword')";
    mysqli_query($conn, $query);

    
};

$query = "SELECT * FROM data;"; 
  
  // FETCHING DATA FROM DATABASE 
  $result = $conn->query($query); 
  
    if ($result->num_rows > 0)  
    { 
        // OUTPUT DATA OF EACH ROW 
        while($row = $result->fetch_assoc()) 
        { 
            echo "Roll No: " . 
                $row["id"]. " - Name: " . 
                $row["Name"]. " | Class: " .  
                $row["Class"]. " | Age: " .  
                $row["Age"]. " | Password: " .  
                $row["Password"]. "<br>"; 
        } 
    }  
    else { 
        echo "0 results"; 
    } 
  
   $conn->close(); 



echo $footer1;
?>
