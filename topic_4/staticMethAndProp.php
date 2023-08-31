<?php
class Person 
{
    public $name, $age;
    static $retirenmentAge = 65;
    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    function sayHello()
    {
        echo "Привет, меня зовут {$this -> name}<br>";
    }
    static function printPerson($person)
    {
        echo "Имя: {$person -> name}; Возраст: {$person -> age}<br>";
    }
}

$tom = new Person('Tom', 23);
Person::printPerson($tom);

$tom = new Person('Tom', 66);
//Вызов нестатического метода
$tom -> sayHello();

//Вызов статического метода
Person::printPerson($tom);
//обращение к статическому свойству
echo "Пенсионный возраст: " . Person::$retirenmentAge . " <br>";

