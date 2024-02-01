<?php
$namataruna = "KAZIM";
$umur = 17;


// tipe data di php

// integer
$angka = 100;

// string
$kata = "string";

// float
$angka_desimal = 10.5;

// boolean
$trueFalse = true;

// array
$data = [
    "nama" => $namataruna,
    "umur" => $umur,
    "almat" => 'indonesia'

];

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


?>