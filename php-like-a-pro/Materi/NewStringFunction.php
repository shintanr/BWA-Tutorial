<?php

// 1. Di PHP 8 terdapt beberapa function baru untuk string, yaitu str_contains, str_starts_with, str_ends_with
// 2. Function str_contains($string, $contains), digunakan untuk melakukan pengecekan string tersebut mengandung kata yang ingin kita cari
// 3. str_starts_with($string, $value), digunakan untuk melakukan pengecekan string tersebut pada awal value mengandung kata yng kita cari.
// 4. str_ends_with($string, $value), digunakan untuk melakukan pengecekan string tersebut pada akhir value mengandung kata yang kita cari

var_dump(str_contains("Saya ingin berbelanja online di Tokopedia", "Tokopedia"));

var_dump(str_starts_with("Belajar PHP di BWA", "Belajar"));

var_dump(str_ends_with("Hari Jumat", "Hari"));