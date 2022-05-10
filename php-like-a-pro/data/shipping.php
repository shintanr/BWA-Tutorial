<?php

class Shipping{
    public function __construct(public string $name, public string $address, private string $contact, protected int $total_transactions){

    }

    public function getContact(){
        return $this->contact . PHP_EOL;
    }
}

class Customer extends Shipping {
    public function getTotalTransaction(){
        return $this->total_transactions;
    }
}