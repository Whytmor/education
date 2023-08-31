<?php
class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}
$tom = new Person('Tom');
$bob = $tom;
$bob -> name = 'Bob';
echo $tom -> name; // bob

class Person1
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}

$tom = new Person1('Tom');
$bob = clone $tom; // копируем объект из $tom в $bob
$bob -> name = 'Bob';
echo $tom -> name; // tom

//Свойство класса предоставляет другой класс
class Company 
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}
class Person2 
{
    public $name, $company;
    function __construct($name, $company)
    {
        $this -> name = $name;
        $this -> company = $company;
    }
}

$microsoft = new Company('Microsoft');
$tom = new Person2('Tom', $microsoft);
echo $tom -> company -> name;
$bob = clone $tom; // копируем из том в боб
$bob -> name = 'Bob';
$bob -> company -> name = 'Google'; // изменяем у боба название компании
echo $tom -> company -> name; // google у тома тоже изменилась компания
// Компания перезаписалась
//Решение 

class Company1 
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}

class Person3
{
    public $name, $company;
    function __construct($name, $company)
    {
        $this -> name = $name;
        $this -> company = $company;
    }
    function __clone()
    {
        $this -> company = clone $this -> company;
    }
}

$microsot = new Company1('Microsoft');
$tom = new Person3('Tom', $microsoft);
echo $tom -> company -> name;

$bob = clone $tom;
$bob -> name = 'Bob';
$bob -> company -> name = 'Google';
echo $tom -> company -> name;

