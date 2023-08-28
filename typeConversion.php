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
