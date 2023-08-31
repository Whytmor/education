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

class Person2 
{
    public $name, $age;
    function __construct($name = 'Tom', $age = 36)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age}<br>";
    }
}
$tom = new Person2();
$tom->displayInfo();

$bob = new Person2();
$bob -> displayInfo('Bob');

$sam = new Person('Sam', 29);
$sam ->displayInfo();

