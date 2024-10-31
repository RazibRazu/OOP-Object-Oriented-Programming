<?php

class MileageCalculator{
    public $pricePerLitre;
    public $distance;
    public $totalFuelPrice;

    public function __construct($pricePerLitre,$distance,$totalFuelPrice)
    {
        $this->pricePerLitre= $pricePerLitre;
        $this->distance= $distance;
        $this->totalFuelPrice= $totalFuelPrice;
        
    }

    function calculateKMPL(){
    $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
    $mileage = $this->distance / $totalFuel;
    echo "The mileage of  vehechle is {$mileage} KMPL\n";
 }

 }
    //motorcycle Calculate
 $motorCycle = new MileageCalculator(122,150,400);//instantiate
 $motorCycle->calculateKMPL();
 
       //Car Calculate
 $car= new MileageCalculator(110,90,1000); //instantiate
 $car->calculateKMPL();

?>