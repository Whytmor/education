<?php
//Получение типа переменной gettype()
$a = 10; 
$b = '10';
echo gettype($a); // integer
echo '<br>';
echo gettype($b); // string


$a = 10;
$b = '10';
echo is_numeric($a); //1
echo '<br>';
echo is_numeric($b); //1

//Установка типа
$a = 10.7;
settype($a, 'integer');
echo $a; //10

//Преобразование типов
$boolVar = false;
$intVar = (int) $boolVar; //0
echo "boolVar = {$boolVar} <br> intVar = {$intVar}";