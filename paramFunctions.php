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