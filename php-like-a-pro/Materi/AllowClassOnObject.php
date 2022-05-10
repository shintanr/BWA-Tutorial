<?php

// 1. Pada PHP 8 saat ini, kita dapat mengakses nama class sebuah object. tanpa perlu menggunakan YourClass::class atau get_your_class($object)
// Jadi kita dapat mengakses nama class dari $object::class secara langsung.

//class
class Order{

}

// create object
$check_class = new Order();

// pada PHP 7, get_class untuk mengetahui kelas apa yang sudah dibuat untuk membuat objek
var_dump(get_class($check_class));
var_dump(Order::class);

// Pada PHP 8
var_dump($check_class::class);