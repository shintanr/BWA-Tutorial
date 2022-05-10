<?php

// Constructor property promotion dapat menyederhanakan sebuah proses penulisan code yang biasanya kita lakukan berulang-ulang
// Saat ini dengan CPP kita dapat membuat sebuah property melalui constructor

// class Order {
//     public string $id;
//     public string $sender;
//     public string $receiver;
//     public int $quantity;
//     public string $item;

//     public function __construct(string $id, string $sender, string $receiver, int $quantity, string $item){
//         $this->id = $id;
//         $this->sender = $sender;
//         $this->receiver = $receiver;
//         $this->quantity = $quantity;
//         $this->item = $item;
//     }

//     public function getOrder(){
//         return "order id {$this->id} dengan pengiriman bernama {$this->sender} dan penerimanya bernama {$this->receiver}";
//     }
// }

// $detail_order = new Order(id: "1", sender: "Shinta", receiver: "Nur", quantity: 2, item: "buku");

// echo $detail_order->id;














class Order {

    public function __construct(public string $id, public string $sender, public string $receiver, private int $quantity, private string $item){
    }

    public function getOrder(){
        return "order id {$this->id} dengan pengiriman bernama {$this->sender} dan penerimanya bernama {$this->receiver}";
    }
}

$detail_order = new Order(id: "1", sender: "Shinta", receiver: "Nur", quantity: 2, item: "buku");
var_dump($detail_order);
echo $detail_order->id;


