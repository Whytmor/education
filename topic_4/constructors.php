<?php
class Person
{
    public $name, $age;
    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age; 
    }

    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age}";
    }
}
$tom = new Person('Tom' , 36);
$tom ->displayInfo();

$bob = new Person('Bob', 41);
$bob->displayInfo();