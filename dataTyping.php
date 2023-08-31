<?php
function isPositive($number) 
{
    return $number;
}
$result = isPositive('=Youdontknowwhoiam');
if ($result) {
    echo 'Положительное';
} else {
    echo 'отрицательное или равно нулю';
}

//Типизация параметров 
function isPositive(int $number)
{
    return $number > 0;
}
$result1 = isPositove(25);// норм 25 - число
$result2 = isPositive('25');// норм php может преобразовывать значения в числа
$result3 = isPositive('fsdg-gdf');// Ошибка TypeEror

function sum(array $number, callable $condition)
{
    $result = 0;
    foreach ($numbers as $number) {
        if ($condition($number)) {
            $result += $number;
        }
    }
    return $result;
}

$isPositive = function ($n)
{
    return $n > 0;
}

$myNumbers = [-2, -1, 0, 1, 2, 3, 4];
$positiveSum = sum($myNumbers, $isPositive);
echo $positiveSum; // 15

// Типизация возвращаемого значения
function isPositive (int $number) : bool
{
    return $number > 0;
}
$result = isPositive(35);

function select($n): callable
{
    switch($n) {
        case 1:
            return function($a, $b) {return $a + $b;};
        case 2:
             return function ($a, $b) {return $a - $b;};
        case 3:
            return function ($a, $b) {return $a * $b;};
        default: return function($a, $b) {return $a . " " . $b;};
    }
}
$selection = select(2);
echo $selection(4, 5); // -1

class Node 
{
    function generate() : static {
        return new Node();
    }
}
$node1 = new Node();
$nide2 = $node1 -> generate();

//Типизация свойст
class Person
{
    public $name;
    public int $age;
}
$tom = new Person();
$tom = new Person();
$tom ->name = 'Tom';
$tom -> age = 36; // корректное значение
echo $tom -> age; // 36
$tom -> age = '36'; // корректное значение
echo $tom -> age; // 36
$tom -> age = 'thirty-eight'; // не корректное значение
echo $tom -> age;

class Person 
{
    public $name; // равно null
    public int $age; // неинициализированн
}
$tom = new Person();
echo $tom -> name; // норм - null
echo $tom -> age; // ошибка - свойство неинициализированно

// тип union
function sum(int|float $n1, int|float $n2): int|float
{
    return $n1 + $n2;
}
echo sum(4, 5); // 9
echo '<br>';
echo sum(2.5, 3.7); // 6.2