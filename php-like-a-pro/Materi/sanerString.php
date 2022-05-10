<?php

// Saner String dan PHP comparison
// 1. Pada PHP sebelumnya melakukan perbandingan pada sebuah integer dan string menghasilkan nilai true
// 2. Semisal membandingkan sebuah value 0 dan "", maka hasilnya true
// Saat ini di PHP 8, hal tersebut sudah dirubah dan tidak lagi menghasilkan sebuah result yang membingungkan
// Pada PHP version sebelumnya, PHP melakukan Type Jugling, yaitu jika sebuah integer 0 dibandingkan dengan sebuh string maka hasilnya akan true.


$compare_1 = 0 == "0";                          // PHP 7/< TRUE
$compare_2 = 0 == "0.0";                        // TRUE
$compare_3 = 0 == "Kalimat";                    // TRUE
$compare_4 = 0 == "";                           // TRUE
$compare_5 = 12 == "     12      ";              // TRUE
$compare_6 = 12 == "ini adalah string12";        // TRUE


var_dump($compare_1);
var_dump($compare_2);
var_dump($compare_3);
var_dump($compare_4);
var_dump($compare_5);
var_dump($compare_6);

// bool(true)
// bool(true)
// bool(false)
// bool(false)
// bool(TRUE)
// bool(false)

