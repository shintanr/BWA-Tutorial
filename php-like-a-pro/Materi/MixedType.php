<?php

// 1. Mixed adlah sebuah tipe data yang digunakan ketika sebuah argument atau return value ingin kita buat dapat menerima atau bisa mengembalikan data yang berbeda-beda
// 2 Type data mixed di PHP 8 saat ini sudah diperbaharui, karena di PHP 8 sudah ada sebuah fitur yaitu unions types
// 3. Mixed adalah sebuah tipe data yang versi lengkapnya dari fitur Union types
// 4. Detail isi tipe data yang ada pada mixed yaitu array | bool | callable | float | int | null | object | resource | string 



// Dengan tipe data mixed v2

function funcMixed(mixed $param): mixed {
    if (is_string($param)) {
        return "String";
    } else if (is_int($param)){
        return 1;
    } else if (is_array($param)){
        return [];
    }
}

var_dump(funcMixed("ini adalah sebuah kalimat"));
var_dump(funcMixed(1));
var_dump(funcMixed([]));


// Dengan Union Types

function funcTest(string|int|float $data){
    if(is_string($data)){
        echo "Ini string". PHP_EOL;
    } else if(is_int($data)){
        echo "ini integer". PHP_EOL;
    } else if(is_float($data)){
        echo "ini float". PHP_EOL;
    }
}

funcTest("oke");
funcTest(1.0);
funcTest(21);