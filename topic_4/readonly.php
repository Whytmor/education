<?php
class Person 
{
    public readonly string $name = 'Undefined' // Ошибка!;
    public $age = 18; // норм

    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}
$tom = new Person('Tom', 38);
$tom -> age = 22; // Значение свойства age можно поменять

//$tom -> name = 'Bob'; // значение свойства name нельзя поменять так как оно только для чтения
echo "Name: {$tom->name}"; // получить значения свойства name можно

class Person2
{
    public readonly string $name;
    public $age;
    public function init()
    {
        $this -> name = 'bob';
    }
}

$tom = new Person2();
$tom -> init(); // инициализация свойства name
echo "Name: {$tom->name}"; //name bob

