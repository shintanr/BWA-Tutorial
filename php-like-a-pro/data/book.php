<?php

class Category {
    private string $name;
    private bool $available;


    public function getName(): string {
        return $this->name;
    }


    public function setName(string $name):void {
        if(trim($name) != ""){
            $this->name = $name;
        }
    }

    public function isAvailable(): bool {
        return $this->available;
    }

    public function setAvailable(bool $available): void {
        $this->available = $available;
    }

}