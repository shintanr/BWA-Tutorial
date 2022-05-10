<?php

class LionAir {
    public function __construct(string $rute){
        $this->rute = $rute;
    }
}

class BatikAir extends LionAir {

}


class WingsAir extends LionAir {

}

class AirPort {
    public LionAir $lion_air;
}

function flightRute(LionAir $lion_air){
    echo "New Schedule flight: $lion_air->rute" . PHP_EOL;
}

return flightRute(new LionAir("CGK - KNO"));