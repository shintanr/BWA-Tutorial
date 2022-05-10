<?php

$uang = 1000;

if($uang < 1000){
    echo  'Kamu tidak bisa membeli permen' . '<br/>';
} elseif ($uang == 1000){
    echo  'Uangmu pas untuk membeli permen' . '<br/>';
}else {
    echo 'Kamu bisa membeli permen dan apapun terserahmu'.'<br/>';
}



$warna = 'merah';
switch($warna){
    case 'merah':
        echo "Berhenti".'<br/>';
        break;
    case 'kuning':
        echo "Hati-hati".'<br/>';
        break;
    case 'hijau':
        echo "Lampu rusak".'<br/>';
        break;
    default:
        echo "Lampu rusak". '<br/>';
        break;
}

//looping
$a = 1;


do {
    echo "Nomor" . $a . '<br/>';
    $a++;
}while ($a <= 10);

while ($a < 6){
    echo "Nomor" . $a . '<br/>';
    $a++;
}


for ($a = 1; $a <= 10; $a++){
    echo "Saya bernilai".$a.'<br/>';
}


$buah = ['tomat', 'semangka', 'apel'];
foreach ($buah as $key => $value) {
    echo $key. '<br/>';
}

$jeruk = ['manis', 'kecut', 'getir'];
foreach ($jeruk as $value) {
    echo $value . '<br/>';
}

//function 
function bilangHalo ($nama){
    echo "Halo. " . $nama . "!" .'<br/>';
}
bilangHalo("Shinta");
bilangHalo("Saskia");
bilangHalo("Robert");

function operasiHitung ($a, $b){
    $total = $a * $b;
    echo $total;
}
operasiHitung(12, 45);

