<?php

// Getter adalah function yang dibuat untuk mengambil field atau properties
// Setter adalah function yang dibuat untuk mengubah data field/properties
// Getter dan setter ini berkaitan dengan encapsulation, yaitu membuat sebuah data sensitif dari sebuah object aman dari akses luar
// Hal ini bertujuan agar data sebauh objek tetp dalam kondisi baik dan valid

require_once("data/book.php");

$category = new Category();
$category->setName("$100 Startup");
$category->setAvailable(true);

$category->setName(" Shinta ");
echo "Nama : {$category->getName()}". PHP_EOL;
echo "Available : {$category->isAvailable()}". PHP_EOL;