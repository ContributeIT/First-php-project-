<?php

abstract class Vehicle{
    public  $Speed;
    public  $Weight;

    abstract function DefaultSpeed();

    abstract function VehicleWeight();
}

class Motorbike extends Vehicle{
    function DefaultSpeed($info = [])
    {
        $this->Speed = $info["Speed of vehicle:"];
    }

    function VehicleWeight()
    {
        echo "Weight of the motorbike: "." ".$this->Weight. "\n";

    }
}

class Bicycle extends Vehicle{
    function DefaultSpeed()
    {
        echo "Speed of the bicycle: "." ".$this->Speed. "\n";
    }

    function VehicleWeight()
    {
        echo "Weight of the bicycle: "." ".$this->Weight. "\n";
        return $this->Speed;
    }
}

$motor = new Motorbike();
$motor->Speed = "100km/h";
$motor->Weight = 30;


$bicycle = new Bicycle();
$bicycle->Speed = "200km/h";
$bicycle->Weight = 10;

$motor->DefaultSpeed();
$motor->VehicleWeight();
$bicycle->DefaultSpeed();
$bicycle->VehicleWeight();