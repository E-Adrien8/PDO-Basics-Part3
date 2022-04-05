<?php
declare(strict_types=1);

require_once 'HighWay.php';

final class ResidentalWay extends HighWay {

    public function __construct(){

        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.
        $this ->addVehicle($vehicle);
    }
}
