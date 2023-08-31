<?php
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
        echo "Name : {$this -> name}; Age : {$this -> age}<br>";
    }
}
$tom = new Person('Tom', 43);
$tom -> printInfo();

class Person 
{
    private $name, $age;
    function __construct($name, $age) 
    {
        if ($age < 0) {
            throw new Exception('Недействительный возраст');
        }
        $this -> name = $name;
        $this -> age = $age;
    }
    function printInfo() 
    {
        echo "Name : {$this -> name}; Age : {$this -> age}<br>";
    }
}
$tom = new Person('tom', -105);
$tom -> printInfo();

class Person 
{
    private $name, $age;
    function __construct($name, $age) 
    {
        $this -> name = $name;
        if ($age < 0) {
            throw new Exception('Недействительный возраст');
        }
        $this -> age = $age;
    }
    function printInfo() 
    {
        echo "Name: {$this -> name}; Age : {$age -> age}<br>";
    }
}
try {
    $tom = new Person('Tom', -105);
    $tom -> printInfo();
} catch (Exception $ex) {
    echo $ex -> getMessage();
}

// Создание классов исключений
class PersonInvalidAgeException extends Exception 
{
    function __construct($age) 
    {
        $this -> message = 'Недействительный возраст : {$age}. Возраст должен быть от 0 до 120';
    }
}
class Person 
{
    private $name, $age;
    function __construct($name, $age)
    {
        $this -> name = $name;
        if ($age < 0) {
            throw new PersonInvalidAgeException($age);
        }
        $this -> age = $age;     
    }
    function printInfo()
    {
        echo "Name : {$this -> name}; Age : {$this -> age}";
    }
}

try {
    $tom = new Person('Tom', -105);
    $tom -> printInfo();
} catch (PersonInvalidAgeException $ex) {
    echo $ex -> getMessage();
}
