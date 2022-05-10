<?php

require_once("data/car.php");

$tesla = new Car();
$tesla->detailEngine("tesla model s");

return $tesla;


//kegunaan dari include_once atau recuire_once adalah berfungsi untuk menyertakan sebuah file PHP kedalam file PHP lainnya dan memastikan file yang disertakan tersebut hanya dieksekusi sekali saja meskipun disertakan beberapa kali dalam beberapa baris program. hal ini untuk menghindari kemungkinan eksekusi berulang pada file yang disertakan tadi. 
