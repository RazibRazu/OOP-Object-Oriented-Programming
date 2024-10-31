<?php
class DailyAccount{
    public function __construct(public $deposit)  {
        
    }

    public $items=[];

    function addItem($name,$cost){
        $this->items[$name]= $cost;
    }

    function createReport(){
        $total=0;
        echo "Initial Deposit was {$this->deposit}.\n";
        foreach ($this->items as $name => $cost) {
            echo "{$name} - {$cost}.\n";
            $total += $cost;
        }
        echo "---------------\n";
        echo "Total: {$total}\n";
        echo "Balane: ".($this->deposit-$total)."\n";
    }
}


//OutPut
$dailyAccount= new DailyAccount(1000);//instanttiate
$dailyAccount->addItem("Kacha Morich",120);
$dailyAccount->addItem("Begun",160);
$dailyAccount->addItem("Apple",300);
$dailyAccount->addItem("Orange",400);
$dailyAccount->createReport();
