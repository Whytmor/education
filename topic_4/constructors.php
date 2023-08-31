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

// Объявление свойств через конструктор
class Person3 
{
    function __construct(public $name, public $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    function displayInfo() 
    {
        echo "Name: {$this->name}; Age: {$this->age}<br>";
    }
}

$tom = new Person3('Tommas', 34);
$tom -> displayInfo();

class Person4
{
    public $name;
    function __construct($name, public $age) 
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age}<br>";
    }
}

class Person5
{
    public $name;
    function __construct($name = 'Tim', public $age = 22)
    {
        $this -> name = $name;
        $this -> age = $age;
    } 

    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age}";
    }
}

