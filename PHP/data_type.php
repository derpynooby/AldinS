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
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);

// null VALUE
$null = null;
var_dump($null);

?>