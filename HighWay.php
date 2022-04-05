<?php

declare(strict_types=1);

abstract class HighWay{

    private  array $currentVehicules;
    private  int $nbLane;
    private  int $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);
    //methode prenant en parametre un objet de type vehicule.

    public function getCurrentVehicules()
    {
        return $this->currentVehicules;
    }

    /**
     * @param array $currentVehicules
     */
    public function setCurrentVehicules(array $currentVehicules): void
    {
        $this->currentVehicules = $currentVehicules;
    }


    public function getNbLane()
    {
        return $this->nbLane;
    }


    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }


    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }


    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}
