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

// Классы для чтения
readonly class Person4
{
    public string $name;
    public int $age;
    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}

//эквивалентно
class Person5
{
    public readonly string $name;
    public readonly int $age;
    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}

readonly class Person6
{
    public function __construct(public string $name, public int $age)
    {}
}

$tom = new Person6('Tom', 38);
//Получить значения свойств можно
echo "Name: {$tom -> name} Age: {$tom -> age}"// name Tom Age 38
// изменить значения свойств нелья
//$tom -> name = "Tomas"; // Ошибка!