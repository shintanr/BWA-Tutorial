<?php

// polymorphism adalah sebuah gambaran pola dalam OOP 
// poly artinya banyak dan morph artinya bentuk
// polymorphism memiliki konsep di mana terdapat banyak class yang memuliki signature method yang sama, berarti memiliki banyak bentuk dan dapat berubah-ubah


require_once("data/transportation.php");

$airport = new LionAir();
$airport->$lion_air = new LionAir("CGK - LBJ");

$airport->$lion_air = new BatikAir("LBJ - DPS");

$airport->$lion_air = new WingsAir("DPS - CGK");
