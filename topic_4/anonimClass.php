<?php
$person = new class 
{
    public $name;
    function sayHello()
    {
        echo 'Hello<br>';
    }
};
$person -> sayHello();
$person -> name = 'Sam';
echo "Name: {$person->name} <br>";

$person = new class('Bob')
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
    function sayHello() 
    {
        echo "hello!<br>";
    }
};
echo "Hello, {$person -> name} <br>";

$person = new class('Bob', 35)
{
    function __construct(public $name, public $age)
    {
        $this -> name = $name;
    }
    function displayInfo() {
        echo "Name: {$this -> name}; Age: {$this->age}<br>";
    
    }
};
$person -> displayInfo();