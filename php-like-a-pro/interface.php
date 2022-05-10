<?php

// Interface sama halnya seperti abstract class tetapi tidak memiliki block
// pada interface hanya boleh memiliki constant 
// untuk melakukan sebuah inheritance atau pewarisan pada interface menggunakan kata kunci inplements, bukan ekstends seperti class biasanya
// pada class hanya dapat memiliki 1 parent, tapi pada interface  dapat melakukan implements kebanyak interface lainnya

require_once("data/motor.php");

$motor = new Xmax();
$motor->drive();
// $motor->getTire();
// $motor->getBrand();

// interface memudahkan kita untuk melakukan turunan ke lebih dari satu class. 1 class dapat memiliki 2 atau lebih sekaligu, maka parent classnya harus bertipe interface