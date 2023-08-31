<?php

use Person as GlobalPerson;
use Person1 as GlobalPerson1;

class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
    function displayInfo()
    {
        echo "Имя: {$this -> name}<br>";
    }
}
class Employee extends GlobalPerson
{

}
$tom = new Employee('Tom');
$tom -> displayInfo();

//Переопределение функционала
class Person1
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
    function displayInfo() 
    {
        echo "Имя: {$this -> name}";
    }
}
class Employee1 extends GlobalPerson1
{
    public $company;
    function __construct($name, $company)
    {
        $this -> name = $name;
        $this -> company = $company;
    }
    function displayInfo()
    {
        echo "Имя: {$this -> name}<br>";
        echo "Работает в {$this -> company} <br>";
    }
}

$tom = new Employee1('Tom', 'Microsoft');
$tom -> displayInfo();