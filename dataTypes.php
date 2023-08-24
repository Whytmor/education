<?php
$num = -100;
echo $num;

// Все числа в десятичной системе имеют значение 28
$num_10 = 28; //Десятичное число
$num_2 = 0b11100; // двоичное число (28 в десятичной системе)
$num_8 = 034; // Восьмеричное число (28 в десятичной)
$num_16 = 0x1c; // шестнадцатиричное число (28 в десятичной)

echo "num_10 = {$num_10} <br>";
echo "num_2 = {$num_2} <br>";
echo "num_8 = {$num_8} <br>";
echo "num_16 = {$num_16} <br>";

// Тип Float 
$a1 = 1.5;
$a2 = 1.3e4; // 1.3 * 10^4
$a3 = 6E-8; // 0.00000006

// Тип bool
$foo = true;
$boo = false;

//Тип string
$a = 10;
$b = 5;
$result = "$a + $b <br>";
echo $result;
$result = '$a + $b';
echo $result;