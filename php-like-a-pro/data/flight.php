<?php

class Pilot {
    var string $name;

    function information(string $destination) {
        echo "Hello everyone, my name is {$this->name}. I'm telling you we're to be flying at 29,000 feet to {$destination} " . PHP_EOL;
    }
}

class Copilot extends Pilot {
    
}