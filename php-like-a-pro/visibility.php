<?php

// Visibility adalah sebuah konsep untuk mengatur property, function, dan cnstant agar dapat diakses dari mana saja pada sebuah objek.
// Ada 3 keyword yaitu public, protected dan private

require_once("data/shipping.php");

$delivery = new Shipping("Shinta Nur", "Jakarta", "081234567890", 25000);
echo $delivery->name . PHP_EOL;
echo $delivery->getContact();       //cara mengakses visibility private adalah menggunakan getter

$customer = new Customer("Algebrigel", "Jakardah", "081234567891", 30000);
echo $customer->getTotalTransaction();