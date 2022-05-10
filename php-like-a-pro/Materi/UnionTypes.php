<?php

// Sebuah property, parameter, argument ataupun sebuah return value, dapat diberikan sebuah tipe data.
// Jika diberikan sebuah tipe data, maka PHP akan menetapkan tipe data yang kita tetapkan harus sesuai dengan apa yang didefinisikan
// Union Types adalah sebuah fitur yang memungkinkan pada PHP 8, membuat sebuah property, parameter, argument, ataupun sebuah return value. dapat memiliki lebih dari 1 jenis tipe data. 

// class word {
//     public float | string $data; //digunakan untuk atau

// }

// $get_word = new word();
// echo $get_word->data = 'tipe string ini adalah kalimat'. PHP_EOL;
// echo $get_word->data = 2;


// function funcTest(float|string|int $data){
//     if(is_int($data)){
//         echo "ini adalah integer";
//     } else if (is_string($data)){
//         echo "ini adalah string";
//     } else if (is_float($data)){
//         echo "ini adalah float";
//     } else {
//         echo "tipe data yang anda masukkan tidak dikenal";
//     }
// }

function funcTest(float|string|int $data): float|string|int{
    if(is_int($data)){
       return 10;
    } else if (is_string($data)){
       return 'ini adalah return string';
    } else if (is_float($data)){
        return 1.5;
    }
}

var_dump(funcTest('masukan string'));
var_dump(funcTest(1.5));
var_dump(funcTest(10));
