<?php

// Throw expression
// 1. Throw adalah sebuah statement di PHP 7
// 2. Kini di PHP 8, Throw menjadi sebuah ekspression, berarti dapat memiliki sebuah nilai
// 3. Dengan perubahan Throw menjadi sebuah expression, Throw kini dapat digunakan pada sebuah keadaan yang membutuhkan return sebuah ternary operator

// function paymentCheckout(?string $card){
//     if($card == null){
//         throw new Exception("Silakan masukkan kartu yang Anda gunakan, sebelum melakukan checkout pembayaran");
//     }

//     echo "Your Card : $card" . PHP_EOL;
// }

// return paymentCheckout(123);

// pada php 7, penggunaan thtow masih menjadi sebuah statement jadi harus menggunakan if terlebih dahulu baru bisa menampilkan throw exception
// Pada PHP 8 sudah menjadi sebuah ekspression karenanya bisa digabungan dengan ternary operator


function paymentCheckout(?string $card){
    echo $checkout = $card != null ? 'Your Card: ' . $card : throw new Exception("Error Prosessing Request");
}

return paymentCheckout('123');