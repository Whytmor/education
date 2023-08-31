<?php

use Person as GlobalPerson;
use Person1 as GlobalPerson1;
use Person2 as GlobalPerson2;
use Person3 as GlobalPerson3;

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
class Employee extends Person
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
class Employee1 extends Person1
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

//Вызов функционала родительского класса
class Person2
{
    public $name;

    function __construct($name)
    {
        $this -> name = $name;
    }

    function displayInfo()
    {
        echo "Имя: {$this -> name} <br>";
    }
}

class Employee2 extends Person2 
{
    public $company;
    function __construct($name, $company)
    {
        parent::__construct($name);
        $this -> company = $company;
    }

    function displayInfo()
    {
        parent::displayInfo();
        echo "Работает в {$this -> company} <br>";
    }
}

$tom = new Employee2('Tom', 'Microsoft');
$tom->displayInfo();

class Employee3 extends Person2 
{
    public $company;
    function __construct($name, $company)
    {
        Person2:: __construct($name);
        $this -> company = $company;
    }

    function displayInfo()
    {
        Person2::displayInfo();
        echo "Работает в {$this -> company}";
    }
}
$tom1 = new Employee3('Tom1', 'Microsoft1');
$tom1 -> displayInfo();


class Person3
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
class Employee4 extends Person3
{
    public $company;
    function __construct($name, $company)
    {
        Person3::__construct($name);
        $this -> company = $company;
    }
    function displayInfo()
    {
        Person3::displayInfo();
        echo "Работает в {$this -> company}<br>";
    }
}
class Manager
{}

$tom = new Employee4('Tom', 'Microsoft');

$tom instanceof Employee4; //true
$tom instanceof Person3; // true
$tom instanceof Manager; // false