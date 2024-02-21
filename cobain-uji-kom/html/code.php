<?php 
$conn = mysqli_connect('localhost','root','','test');

$username = ["username"];
$email = ["email"];
$password = ["password"];
$fullname = ["fullname"];
$address = ["address"];
$register = ["register"];


if (isset($_POST["register"])){
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $fullname = htmlspecialchars($_POST["fullname"]);
    $address = htmlspecialchars($_POST["address"]);
   
    if($username != '' || $email != '' || $password != '' || $fullname != '' || $address != ''){

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user (id, username, fullname, address, email, password) VALUES('', '$username', '$fullname', '$address', '$email', '$hashedPassword')";
        mysqli_query($conn, $query);

    }else{
        $error = "Please fill the empty section";
    }
    
    
};

?>