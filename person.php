<?php

class Person {
    public $name;
    public $age;
    public $sex;

    function introduce(){ //Method
        echo "Assalamu Alaikum, I am {$this->name} and I am {$this->age} years old. I am a {$this->sex}\n";
    }

}
$daniel = new Person();//Object
$daniel->name= "Daniel Doe";
$daniel->age= 25;
$daniel->sex= "Male";
$daniel->introduce();

//New Object
$tamim= new Person();
$tamim->name= "Tamin Khan";
$tamim->age= 15;
$tamim->sex="Male";
$tamim->introduce();

?>
