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
class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}