<?php
// This keyword, digunakan untuk mengakses property atau function laindi class yang sama
// Menggunakan this keyword dalam mengakses sebuah objek, yaitu dengan kata kunci this

recuire_once("data/car.php");

$tesla = new Car(); //instansiasi objek Car
$tesla->type = "tesla model 3";
$tesla->detailEngine("tesla model s");

return $tesla;
