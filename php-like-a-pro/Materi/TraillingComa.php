<?php

// Trailing Comma in Parameter list

// 1. Di PHP 8 saat ini bisa melakukan penambahan sebuah comma (,) di akhir sebuah array parameter saat pemanggilan function dan lain-lain
// 2. Fitur ini sederhana tapi sangat membantu kita disaat melakukan duplikasi sebuah value array menggunakan shortcur (command + shift + d) atau (ctrl + d) pada vscode
// Biasanya semisal kita lupa menghapus sebuah comma di akhir array atau parameter akan mengakibatkan error


function orderfood(string $store, string $item){

}

orderFood("KFC", "Paket Hemat tanpa CD nya");

$listOrder = [
    "store" => "KFC",
    "item" => "Paket Hemat 1 tanpa CD nya",
    "discount" => "5000",
];


// yang dimaksud adalah pengguanaan koma di akhir isi array tidak akan mengakibatkan terjaidnya error