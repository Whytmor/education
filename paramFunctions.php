<?php
function hello($name)
{
    echo "<h2>Hello {$name}</h2>";
}

hello('Tom');
hello('Bob');
hello('Sam');

$userName = 'Tom';
hello($userName);

function displayInfo($name, $age)
{
    echo "<div>Имя: {$name} <br /> Возраст: {$age}</div><hr>";
}

displayInfo('Tom', 36);
displayInfo('Bob', 39);
displayInfo('Sam', 28);

// Необязательные параметры
function displayInfo1($name, $age = 18) 
{
    echo "<div>Имя: {$name} <br /> Возраст: {$age}</div><hr>";
}

displayInfo1('Tom', 36);
displayInfo1('Sam');

//Именованные параметры
echo "<br>";
function displayInfo2($name, $age = 18)
{
    echo "<div>Имя: {$name} <br /> Возраст: {$age}</div><hr>";
}

displayInfo2(age: 23, name: "Bob");
displayInfo2(name: 'Tom', age: 36);
displayInfo2(name: 'Alice');

// Переменное количество параметров
echo '<br>';
function sum(...$numbers)
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    echo "<p>Сумма: {$result}</p>";
}

sum(1, 2, 3);
sum(2, 3);
sum(4, 5, 8, 10);

function sum1(...$numbers)
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    echo "<p>Сумма: {$result}</p>";
}
$numbers = [3, 5, 7, 8];
sum1(...$numbers); //23

function getAverageScore($name, ...$scores) 
{
    $result = 0.0;
    foreach ($scores as $score) {
        $result += $score;
    }
    $result = $result /count($scores);
    echo "<p>{$name}: {$result}</p>";
}
getAverageScore('Tom', 5, 5, 4, 5);
getAverageScore('bob', 4, 3, 4, 4, 4);

