<?php

//Use private class
class DailyAccount{
    public function __construct(public $deposit)  {
        
    }

    private $items=[];
    private $total=0;

    function addItem($name,$cost){
        $this->total += $cost;
        if ($this->total > $this->deposit) {
            echo "Error:You don't have enough Balance.\n";
            $this->total -= $cost;
            return;
        }
        $this->items[$name]= $cost;
    }

    function createReport(){
        echo "Initial Deposit was {$this->deposit}.\n";
        foreach ($this->items as $name => $cost) {
            echo "{$name} - {$cost}.\n";
        }
        echo "---------------\n";
        echo "Total: {$this->total}\n";
        echo "Balane: ".($this->deposit-$this->total)."\n";
    }
}


//OutPut
$dailyAccount= new DailyAccount(1000);//instanttiate
$dailyAccount->addItem("Kacha Morich",120);
$dailyAccount->addItem("Begun",160);
$dailyAccount->addItem("Apple",300);
$dailyAccount->addItem("Orange",300);
// $dailyAccount->addItem("Ghee",1000);
$dailyAccount->createReport();
