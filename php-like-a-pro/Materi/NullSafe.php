<?php

// Nullsafe Operator adalah sebuah fitur baru di PHP 8
// Fitur ini adalah untuk memudahkan kita, disaat mengakses sebuah objek, lalu kita melakukan pengecekan pada objek tersebut null atau tidak, tanpa harus menggunakan if else, ternary operator atau switch case
// Cukup menggunakan karakter ? (tanda tanya), maka PHP akan melakukan pengecekan object yang akan kita akses tersebut null atau tidak.
// fitur nullsafe operator sudah ada lebih dulu, di bahasa pemrograman kotlin dan typescript.

// Kode tanpa nullsafe operator

class Order {
    public ?string $item;
}

class Transaction {
    public ?Order $order;
}

function getItem(?Transaction $transaction): ?string {
    if($transaction != null){
        if($transaction->order != null){
            return $transaction->order->item;
        }
    }
    return null;
}
echo getItem(null);




// kode dengan nullsafe Operator
// class Order {
//     public ?string $item;
// }

// class Transaction {
//     public ?Order $order;
// }

// function getItem(?Transaction $transaction): string {
//     return $transaction?->order?->item;
// }
// echo getItem(null);


