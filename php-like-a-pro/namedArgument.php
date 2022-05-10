<?php 

// function kalkulasi ($satu, $dua, $tiga, $empat){
//     echo $satu * $empat + $dua * $tiga;
// }

// return kalkulasi (2, 3, 5, 2);


// setiap function biasanya memiliki sebuah Argument dan parameter
// Argument dan parameter tersebut harus digunakan sesuai dengan posisinya
// saat ini dengan fitur named arguments, penggunaan sebuah argument dan parameter dapat dilakukan tanpa harus mengikuti posisinya
// karena itu ada named arguments, kita dapat memberikan nama pada argument dan parameter, lalu dapat melakukan skip pada sebuah argument yang tidak digunakan (optional), semisal dengan sebuah value static 

// tetapi dalam penggunaan named argument agar bisa seperti point ke 3, harus memanggil nama argument atau nama dari parameternya.


function funcTest($box_one, $box_two, $box_three = 0, $box_four){
    echo $box_one + $box_two * $box_three - $box_four;
}

return funcTest(box_one: 1, box_two: 3, box_four: 6);