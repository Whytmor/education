<?php

use Person as GlobalPerson;

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