<?php

 class MileageCalculator{
    public $pricePerLitre;
    public $distance;
    public $totalFuelPrice;

    function calculateKMPL(){
    $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
    $mileage = $this->distance / $totalFuel;
    echo "The mileage of  vehechle is {$mileage}\n";
 }

 }
    //motorcycle Calculate
 $motorCycle = new MileageCalculator();
 $motorCycle -> pricePerLitre= 122;
 $motorCycle->distance = 100;
 $motorCycle->totalFuelPrice=500;
 $motorCycle->calculateKMPL();

    //Car Calculate
 $car = new MileageCalculator();
 $car->pricePerLitre =110;
 $car->distance=50;
 $car->totalFuelPrice=300;
 $car->calculateKMPL();
 ?>


