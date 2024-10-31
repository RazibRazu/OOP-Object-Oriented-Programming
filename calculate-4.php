<?php

class MileageCalculator{

    public function __construct(public $pricePerLitre,public $distance,public $totalFuelPrice){
        
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