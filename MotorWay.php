<?php
declare(strict_types=1);

require_once 'HighWay.php';


final class MotorWay extends HighWay {


    public function __construct(){

        $this->setNbLane(4);
        $this->setMaxSpeed(130);

    }
    public function addVehicle(Vehicle $vehicle)
    {
    // TODO: Implement addVehicle() method.
        if (!$vehicle instanceof Bike || !$vehicle instanceof Skateboard){

            $this->addVehicle($vehicule);
        }
}
}