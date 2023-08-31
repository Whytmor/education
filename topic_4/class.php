<?php
class Person
{

}
$person = new Person();
print_r($person);

class Person1
{
    public $name, $age;

    function hello() 
    {
        echo 'Hello!<br>';
    }
}
$tom = new Person1();
$tom->name = 'tom'; // установка свойства $name
$tom->age = 36; // Установка свойства $age
$personName = $tom->name; //получение значение свойства $name
echo "Имя пользователя: {$personName} <br>";
$tom->hello(); // вызов метода hello()
print_r($tom);

class Person3
{
    public $name = 'Undefined', $age = 18;

    function hello()
    {
        echo 'hello<br>';
    }
}
$tom = new Person3();
$tom->age = 36; // установка свойства age
echo "Имя пользователя: {$tom->name}<br>";
echo "Возраст пользователя: {$tom->age}<br>";
print_r($tom);

class PersonThis
{
    public $name ='Undefined', $age = 18;
    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age} <br>";
        
    }
}

$tom = new PersonThis();
$tom->name = 'Tom';
$tom->displayInfo(); // name: Tom; Age: 18

class Person4
{
    public $name = 'Undefined', $age = 18;

    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age}<br>";
    }
}
$tom = new Person4();
$tom->name = 'Tom';
$tom->displayInfo();

$bob = new Person4();
$bob->name = 'Bob';
$bob->age = 25;
$bob->displayInfo();

class Person5
{
    public $name, $age;
    function displayInfo()
    {
        echo "Name: {$this->name}; Age: {$this->age}";
    }
}
$tom = new Person5();
$tom -> name = 'Tom';
$tom -> age = 3;

$tomas = new Person5();
$tomas -> name = 'Tom';
$tomas -> age = 36;

if ($tom == $tomas) {
    echo 'Переменные tom и tomas равны<br>';
} else {
    echo 'Переменные tom и tomas не равны<br>';
}

if ($tom === $tomas) {
    echo 'Переменные tom и tomas эквивалентны<br>';
} else {
    echo 'Переменные tom и tomas не эквивалентны<br>';
}

$person = new Person5();
$tom = $person;
$tom -> name = 'Tom';
$tom -> age = 36;

$tomas = $person;
if ($tom == $tomas) {
    echo 'Переменные tom and tomas равны<br>';
} else {
    echo 'Переменные tom and tomas не равны <br>';
}

if ($tom === $tomas) {
    echo 'Переменные tom and tomas эквивалентны';
} else {
    echo 'Переменные tom and tomas не эквивалентны';
}