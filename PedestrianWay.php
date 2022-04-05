<?php
declare(strict_types=1);

require_once 'HighWay.php';

final class PedestrianWay extends HighWay {

    public function __construct(){

        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.

    if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)

    $this->addVehicle($vehicle);
    }
}