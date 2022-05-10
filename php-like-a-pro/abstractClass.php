<?php

// Abstract Class adalah sebuah class yang tidak bisa dibuat sebagai objectt secara langsung dan hanya bisa diturunkan
// Pada abstract class, hanya turunannya yang bisa membuat sebuag objek dari class tersebut
// membuat abstract class menggunakan kata kunci abstract sebelum kata kunci class


require_once("data/location.php");

// $location = new Location();
// var_dump($location);
// Abstract class tidak bisa diinisialisasi, hanya kelas turunannya saja yang bisa 
// 

$city = new City();
var_dump($city);