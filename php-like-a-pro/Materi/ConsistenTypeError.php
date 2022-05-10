<?php


// Consisten Type Error
// 1. Banyak sekali function di PHP, jika kita salah mengirimkan sebuah argument dengan sebuah tipe data yang sudah ditentukan, bukan sebuah TypeError yang dikembalikan, melainkan hanya mengembalikan warning
// Hal ini justru mempersulit kita untuk mengetahui apa yang harus diperbaiki dan kenapa
// Tapi saat ini di PHP 8 semua itu dirubah, agar lebih konsisten, Maka sebuah function saat ini, akan mengemblikn sebuah TypeError jika kita melakukan sebuh kesalahan dalam mengirim tipe data.

strlen([]);         //fungsi ini digunakan untuk mengembalikan panjang string
// TypeError: strlen(): Argument #1 ($str) must be of type string, array given


array_chunk([], -1);
// TypeError: strlen(): Argument #2 ($str) must be of type string, array given



// array_chunk digunakan untuk memecah atau memotong sebuah array menjadi bagian array baru 
// cara penulisan syntaxnya aadlah 
// array_chunk(array, size, preserve_keys)
// array = harus selalu diisi, nama array yang digunakan
// size = harus selalu diisi, nilai dari jumlah data yang akan dibagi
// preserve_key = ini opsional, nilai hanya berisi true atau false