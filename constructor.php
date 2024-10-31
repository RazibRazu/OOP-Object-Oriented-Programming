<?php

//this is constructor function___construct()

class Person{
    public function __construct($name) 
    {
        echo "I'm Bangladesh. My Name is Mr {$name}.\n";
    }
}

$khaleda= new Person("Khaleda Zia");
$tareq = new Person("Mr Tareq");
$yunus = new Person("Mr Yunus");
