<?php

class PetrolMileageCalculator{
    public $pricePerLitre=122;
    public $distance;
    public $totalFuelPrice;

    public function __construct($distance,$totalFuelPrice)
    {
        $this->distance= $distance;
        $this->totalFuelPrice= $totalFuelPrice;
        
    }

    function calculateKMPL(){
    $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
    $mileage = $this->distance / $totalFuel;
    echo "The mileage of  vehechle is {$mileage} KMPL\n";
 }

 }

 class OctanMileageCalculator{
    public $pricePerLitre=110;
    public $distance;
    public $totalFuelPrice;

    public function __construct($distance,$totalFuelPrice)
    {
        $this->distance= $distance;
        $this->totalFuelPrice= $totalFuelPrice;
        
    }

    function calculateKMPL(){
    $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
    $mileage = $this->distance / $totalFuel;
    echo "The mileage of  vehechle is {$mileage} KMPL\n";
 }
 
 }

//Output
 $car = new PetrolMileageCalculator(100,2000);
 $car->calculateKMPL();


 $motorCycle = new OctanMileageCalculator(120,2500);
 $motorCycle->calculateKMPL();

?>