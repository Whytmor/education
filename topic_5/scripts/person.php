<?php
namespace base;
class Person
{
    private $name, $age;
    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    function printInfo()
    {
        echo "Name: {$this -> name}; Age: {$this -> age}<br>";
    }
}
namespace base\classes;
const adminName = 'Odmen';
function printPerson($person)
{
    echo $person -> name . '<br>';
}
class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}
class Employee extends Person
{}
