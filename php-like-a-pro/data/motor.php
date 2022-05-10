<?php

interface HasBrand {
    function getBrand(): string;
}


interface IsMaintenance {
    function isMaintenance(): bool;
}

interface Motor extends HasBrand{
    function drive(): void;

    function getTire(): int;
}

class Xmax implements Motor, IsMaintenance {
    public function drive():void {
        echo "Drive Xmax" . PHP_EOL;
    }

    public function getTire(): int {
        return 4;
    }

    public function getBrand(): string {
        return  "Yamaha";
    }

    public function isMaintenance(): bool {
        return false;
    }
}