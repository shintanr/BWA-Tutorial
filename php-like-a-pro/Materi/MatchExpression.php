<?php

// Match expression adalah seuah kontrol baru di PHP
// Sebuah kontrol baru yang mirip dengan switch case 
// Tetapi ME lebih baik dari SC, karena penulisan kode menjadi lebih ringkas dan ME bisa mengembalikan sebuah value, seperti halnya ternary operator
// Pada ME, kita bisa melakukan pengecekan kondisi lainnya (semisal perbandingan ataupun sebuah boolean dari sebuah function lain)

// jika menggunakan switch case 

// $transportation = "Pesawat";
// $result = "";

// switch ($transportation){
//     case "Mobil":
//     case "Motor":
//     case "Bus":
//         $result = "Transportasi Darat";
//         break;
//     case "Kapal":
//         $result = "Transportasi Laut";
//         break;
//     case "Pesawat":
//         $result = "Transportasi Udara";
//         break;
//     default:
//         $result = "Mohon maaf, Jenis transportasi yang anda masukkan tidak dikenal";
// }

// echo $result;


// Part 3

$word = "saya mau makan car";
$result = match(true){
    str_contains($word, 'tokopedia') => "Kalimat anda mengandung kata sebuah online store",
    str_contains($word, 'gojek') => "Kalimat anda mengandung kata sebuah ojek online",
    str_contains($word, 'car') => "Kalimat anda mengandung kata sebuah otomotif",
    str_contains($word, 'cow') => "Kalimat anda mengandung kata sebuah binatang ternak",
    default => "Kalimat yang anda masukkan tidak mengandung kata yang ada di kondisi"

};
echo $result;



// jika menggunakan match ekspression

// $transportation = "Kapal";
// $result = match($transportation){
//     "Mobil", "Motor", "Bus" => "Transportasi Darat", "Kapal" => "Transportasi Laut", 
//     "Pesawat" => "Transportasi Udara",
//     default => "Mohon maaf, jenis transportasi yang Anda masukkan tidak dikenal"
// };

// echo $result;

// $total_baggage = "100";

// $result = match(true){
//     $total_baggage >= 50 => "Bagasi kena charge IDR 250.000",
//     $total_baggage >= 35 => "Bagasi kena charga IDR 230.000",
//     $total_baggage >= 30 => "Bagasi kena charge IDR 200.000",
//     $total_baggage >= 25 => "Bagasi kena charge IDR 100.000",
//     default => "Bagasi anda tidak kena charge"
// };

// echo $result;



// $total_baggage = "100";

// $result = match(false){
//     $total_baggage >= 25 => "Bagasi kena charge IDR 100.000",
//     $total_baggage >= 30 => "Bagasi kena charge IDR 200.000",
//     $total_baggage >= 35 => "Bagasi kena charga IDR 230.000",
//     $total_baggage >= 50 => "Bagasi kena charge IDR 250.000",
//     default => "Bagasi anda tidak kena charge"
// };

// echo $result;


// setelah saya percobaan dengan mengubah tata letak, hasil akanberubah. untuk menggunakan match ekspression harus ditulis yang besar dulu nilainya, atau urutannya dari yang terbesar ke yang terkecil



