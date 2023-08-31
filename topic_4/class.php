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


