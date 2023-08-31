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

// ключевое слово self

class Person2
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
        echo "Пенсионный возраст: " . self::$retirenmentAge . "<br>";
        //Но нельзя обращаться с нестатическим методам и свойствам
        //echo "Имя this->name"; // так нельзя
        // this->sayHello(); // так нельзя
    }
    function checkAge()
    {
        if ($this -> age >= self::$retirenmentAge) {
            echo "Вы пенсионер! <br>";
        } else {
            echo "До пенсии ещё " . (Person2::$retirenmentAge - $this -> age) . " лет<br>";
        }
    }
}

$bob = new Person2('Боб', 47);
Person::printPerson($bob);
$bob -> checkAge();

class PersonId 
{
    public $name;
    private $id;
    private static $counter = 0;

    function __construct($name) 
    {
        self::$counter++;
        $this -> id = self::$counter;
        $this -> name = $name;
    }

    static function getCounter()
    {
        return self::$counter;
    }
    function getId()
    {
        return $this -> id;
    }
}

$tom = new PersonId('Tom');
$bob = new PersonId('Bob');

echo "{$tom -> name} имеет id: {$tom -> getId()} <br>";
echo "{$bob -> name} имеет id: {$bob -> getId()} <br>";
echo"Всего пользователей: " . PersonId::getCounter();